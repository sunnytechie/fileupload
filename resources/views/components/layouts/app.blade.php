<!DOCTYPE html>
<html>
<head>
    <!-- Other head elements -->
    @livewireStyles
</head>
<body>
    <!-- Page content -->
    <main>
        @yield('content')
    </main>
    @livewireScripts

    <script>
        const form = document.querySelector('form');

form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const formData = new FormData(form);

    await axios.post('/upload-video', formData, {
        headers: {
            'Content-Type': 'multipart/form-data',
        },
        onUploadProgress: (progressEvent) => {
            const progress = Math.round((progressEvent.loaded / progressEvent.total) * 100);
            console.log(`Upload Progress: ${progress}%`);
            // Update the UI with the progress
        },
    });

    // Handle success or error after upload
});

    </script>
</body>
</html>
