<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
    <div class="container">
        <a class="navbar-brand" href="#">Kelompok 7</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('index.php')?>">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Menu Page
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="<?= base_url('Page/Siswa/DataSiswa.php') ?>">Data Siswa</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Page/Siswa/FormDaftar.php') ?>">Pendaftaran</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('Page/About/TentangKami.php') ?>">Tentang Kami</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>