<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form method="POST" action="{{ route('register') }}" class="p-6 bg-white shadow-md rounded-lg w-full max-w-md">
        @csrf
        <h2 class="mb-4 text-xl font-bold text-center">Register</h2>
        
        <!-- Notification Section -->
        @if(session('success'))
        <div id="success-notification" class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('success') }}
        </div>
        <script>
            // Auto hide notification after 3 seconds
            setTimeout(() => {
                document.getElementById('success-notification').style.display = 'none';
            }, 3000);
        </script>
        @endif
        
        <input type="text" name="name" placeholder="Nama" class="w-full p-2 mb-2 border rounded" required>
        <input type="email" name="email" placeholder="Email" class="w-full p-2 mb-2 border rounded" required>
        <input type="password" name="password" placeholder="Password" class="w-full p-2 mb-2 border rounded" required>
        <input type="password" name="password_confirmation" placeholder="Konfirmasi Password" class="w-full p-2 mb-4 border rounded" required>
        <button type="submit" class="w-full p-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Daftar</button>
        
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Sudah mempunyai akun? 
                <a href="{{ route('login') }}" class="text-blue-500 hover:text-blue-700">Login disini</a>
            </p>
        </div>
    </form>

    @if(session('registered'))
    <script>
        // Show success alert
        Swal.fire({
            title: 'Registrasi Berhasil!',
            text: '{{ session("registered") }}',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            // Redirect to login page after clicking OK
            window.location.href = "{{ route('login') }}";
        });
        
        // Or redirect automatically after 3 seconds
        setTimeout(() => {
            window.location.href = "{{ route('login') }}";
        }, 3000);
    </script>
    @endif
</body>
</html>