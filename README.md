Aplikasi iq.es dikembangkan menggunakan framework Laravel, mengadopsi pola MVC (Model-View-Controller) dengan struktur yang terorganisir dan mudah dikembangkan. Mari kita mulai dengan memahami struktur direktori dan file-file utamanya."

Struktur Direktori
"Seperti yang bisa kita lihat, aplikasi ini memiliki struktur direktori khas Laravel:

views: Direktori yang berisi tampilan atau antarmuka pengguna
components: Berisi komponen-komponen yang dapat digunakan kembali
layouts: Berisi template dasar untuk seluruh halaman

Di dalam direktori components, kita memiliki dua file penting:

footer.blade.php: Komponen footer yang konsisten di seluruh aplikasi
navbar.blade.php: Komponen navigasi atas untuk seluruh aplikasi

Di direktori layouts, kita memiliki file utama:

app.blade.php: Template induk yang digunakan oleh semua halaman

Sedangkan untuk halaman-halaman utama aplikasi, kita memiliki:

login.blade.php: Halaman login untuk autentikasi
dashboard.blade.php: Halaman dashboard utama
pengelolaan.blade.php: Halaman untuk manajemen varian es
profile.blade.php: Halaman pengaturan profil admin
welcome.blade.php: Halaman selamat datang/landing page"
