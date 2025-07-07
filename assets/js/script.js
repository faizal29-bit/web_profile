document.addEventListener('DOMContentLoaded', () => {
    const studentForm = document.getElementById('studentForm');
    const studentListDiv = document.getElementById('studentList');
    const studentIdInput = document.getElementById('studentId');
    const nimInput = document.getElementById('nim');
    const namaInput = document.getElementById('nama');
    const jurusanInput = document.getElementById('jurusan');
    const angkatanInput = document.getElementById('angkatan');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone'); // Tambah input telepon
    const linkedinInput = document.getElementById('linkedin');
    const githubInput = document.getElementById('github');
    const deskripsiInput = document.getElementById('deskripsi');
    const cancelEditBtn = document.getElementById('cancelEditBtn');
    const noStudentsMessage = document.getElementById('noStudentsMessage');

    let editingNIM = null;

    async function fetchStudents() {
        try {
            const response = await fetch('api/students.php');
            const students = await response.json();
            studentListDiv.innerHTML = '';

            if (students.length === 0) {
                noStudentsMessage.style.display = 'block';
                return;
            } else {
                noStudentsMessage.style.display = 'none';
            }

            students.forEach(student => {
                const studentCard = document.createElement('div');
                studentCard.classList.add('col-md-6', 'col-lg-4', 'mb-3');
                studentCard.innerHTML = `
                    <div class="card student-card h-100">
                        <div class="card-body">
                            <h5 class="card-title">${student.nama} <span class="badge bg-info text-dark">${student.nim}</span></h5>
                            <p class="card-text"><strong>Jurusan:</strong> ${student.jurusan}</p>
                            <p class="card-text"><strong>Angkatan:</strong> ${student.angkatan}</p>
                            <p class="card-text"><strong>Email:</strong> ${student.email}</p>
                            ${student.phone ? `<p class="card-text"><strong>Telepon:</strong> ${student.phone}</p>` : ''}
                            ${student.linkedin ? `<p class="card-text"><strong>LinkedIn:</strong> <a href="${student.linkedin}" target="_blank">${student.linkedin}</a></p>` : ''}
                            ${student.github ? `<p class="card-text"><strong>GitHub:</strong> <a href="${student.github}" target="_blank">${student.github}</a></p>` : ''}
                            ${student.deskripsi ? `<p class="card-text"><strong>Tentang:</strong> ${student.deskripsi}</p>` : ''}
                            
                            <button class="btn btn-warning btn-sm edit-btn" data-nim="${student.nim}">Edit</button>
                            <button class="btn btn-danger btn-sm delete-btn" data-nim="${student.nim}">Hapus</button>
                        </div>
                    </div>
                `;
                studentListDiv.appendChild(studentCard);
            });

            addEventListeners();
        } catch (error) {
            console.error('Error fetching students:', error);
            alert('Gagal memuat data mahasiswa.');
        }
    }

    studentForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const studentData = {
            nim: nimInput.value,
            nama: namaInput.value,
            jurusan: jurusanInput.value,
            angkatan: parseInt(angkatanInput.value),
            email: emailInput.value,
            phone: phoneInput.value, // Tambah ini
            linkedin: linkedinInput.value,
            github: githubInput.value,
            deskripsi: deskripsiInput.value
        };

        try {
            let response;
            if (editingNIM) {
                response = await fetch(`api/students.php?nim=${editingNIM}`, {
                    method: 'PUT',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(studentData)
                });
            } else {
                response = await fetch('api/students.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(studentData)
                });
            }

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'Gagal menyimpan data.');
            }

            alert(`Profil ${editingNIM ? 'diperbarui' : 'ditambahkan'} berhasil!`);
            studentForm.reset();
            editingNIM = null;
            cancelEditBtn.style.display = 'none';
            nimInput.disabled = false;
            fetchStudents();
        } catch (error) {
            console.error('Error saving student:', error);
            alert(`Error: ${error.message}`);
        }
    });

    function addEventListeners() {
        document.querySelectorAll('.edit-btn').forEach(button => {
            button.addEventListener('click', async (e) => {
                const nimToEdit = e.target.dataset.nim;
                try {
                    const response = await fetch(`api/students.php?nim=${nimToEdit}`);
                    const student = await response.json();
                    if (response.ok) {
                        nimInput.value = student.nim;
                        nimInput.disabled = true;
                        namaInput.value = student.nama;
                        jurusanInput.value = student.jurusan;
                        angkatanInput.value = student.angkatan;
                        emailInput.value = student.email;
                        phoneInput.value = student.phone || ''; // Isi input telepon
                        linkedinInput.value = student.linkedin || '';
                        githubInput.value = student.github || '';
                        deskripsiInput.value = student.deskripsi || '';

                        editingNIM = nimToEdit;
                        cancelEditBtn.style.display = 'inline-block';
                        window.scrollTo({ top: 0, behavior: 'smooth' });
                    } else {
                        alert(student.message);
                    }
                } catch (error) {
                    console.error('Error fetching student for edit:', error);
                    alert('Gagal mengambil data mahasiswa untuk diedit.');
                }
            });
        });

        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', async (e) => {
                const nimToDelete = e.target.dataset.nim;
                if (confirm(`Anda yakin ingin menghapus profil mahasiswa dengan NIM ${nimToDelete}?`)) {
                    try {
                        const response = await fetch(`api/students.php?nim=${nimToDelete}`, {
                            method: 'DELETE'
                        });
                        const result = await response.json();
                        if (response.ok) {
                            alert(result.message);
                            fetchStudents();
                        } else {
                            alert(result.message);
                        }
                    } catch (error) {
                        console.error('Error deleting student:', error);
                        alert('Gagal menghapus profil mahasiswa.');
                    }
                }
            });
        });
    }

    cancelEditBtn.addEventListener('click', () => {
        studentForm.reset();
        editingNIM = null;
        nimInput.disabled = false;
        cancelEditBtn.style.display = 'none';
    });

    fetchStudents();
});