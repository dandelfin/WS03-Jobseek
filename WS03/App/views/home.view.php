<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobseek</title>
    <link rel="stylesheet" href="/WS03/public/css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="logo">Jobseek</div>
    <div>
        <a href="#" id="openLogin">Login</a>
        <a href="#" id="openRegister">Register</a>
        <a class="btn" href="/WS03/public/listings/create">Post a Job</a>
    </div>
</nav>

<!-- Hero -->
<section class="hero">
    <h1>Find Your Dream Job</h1>
    <div class="hero-search">
        <input type="text" placeholder="Job title, keywords...">
        <input type="text" placeholder="Location">
        <button type="button">Search</button>
    </div>
</section>

<!-- Banner -->
<section class="banner">
    <h2>Unlock Your Career Potential</h2>
    <p>Discover the perfect job opportunity tailored for you.</p>
</section>

<!-- Job Listings -->
<section class="container">
    <h2>Recent Jobs</h2>
    <?php foreach ($jobs as $i => $job): ?>
    <div class="card">
        <h3><?= htmlspecialchars($job['title']) ?></h3>
        <p><?= htmlspecialchars($job['description']) ?></p>
        <p><strong>Salary:</strong> <?= htmlspecialchars($job['salary']) ?></p>
        <p><strong>Location:</strong> <?= htmlspecialchars($job['location']) ?></p>
        <div class="tags">
            <?php foreach (explode(',', $job['tags']) as $tag): ?>
                <span><?= htmlspecialchars(trim($tag)) ?></span>
            <?php endforeach; ?>
        </div>
        <a class="details" href="/WS03/public/listings/show?id=<?= $i + 1 ?>">View Details</a>
    </div>
    <?php endforeach; ?>
</section>

<!-- Login Modal -->
<div class="modal-overlay" id="loginModal">
    <div class="modal">
        <button class="close-btn" id="closeLogin">&times;</button>
        <h2>Login</h2>
        <div class="alert">Demo: enter any email & password.</div>
        <div class="form-group">
            <label for="loginEmail">Email</label>
            <input type="email" id="loginEmail" placeholder="you@example.com">
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" id="loginPassword" placeholder="••••••••">
        </div>
        <button class="submit-btn" id="loginSubmit">Login</button>
        <p class="switch-link">Don't have an account? <a id="switchToRegister">Register</a></p>
    </div>
</div>

<!-- Register Modal -->
<div class="modal-overlay" id="registerModal">
    <div class="modal">
        <button class="close-btn" id="closeRegister">&times;</button>
        <h2>Create Account</h2>
        <div class="form-group">
            <label for="regName">Full Name</label>
            <input type="text" id="regName" placeholder="John Doe">
        </div>
        <div class="form-group">
            <label for="regEmail">Email</label>
            <input type="email" id="regEmail" placeholder="you@example.com">
        </div>
        <div class="form-group">
            <label for="regPassword">Password</label>
            <input type="password" id="regPassword" placeholder="••••••••">
        </div>
        <div class="form-group">
            <label for="regConfirm">Confirm Password</label>
            <input type="password" id="regConfirm" placeholder="••••••••">
        </div>
        <button class="submit-btn" id="registerSubmit">Create Account</button>
        <p class="switch-link">Already have an account? <a id="switchToLogin">Login</a></p>
    </div>
</div>

<script>
    const loginModal    = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');

    document.getElementById('openLogin').addEventListener('click', e => { e.preventDefault(); loginModal.classList.add('active'); });
    document.getElementById('openRegister').addEventListener('click', e => { e.preventDefault(); registerModal.classList.add('active'); });
    document.getElementById('closeLogin').addEventListener('click', () => loginModal.classList.remove('active'));
    document.getElementById('closeRegister').addEventListener('click', () => registerModal.classList.remove('active'));
    document.getElementById('switchToRegister').addEventListener('click', () => { loginModal.classList.remove('active'); registerModal.classList.add('active'); });
    document.getElementById('switchToLogin').addEventListener('click', () => { registerModal.classList.remove('active'); loginModal.classList.add('active'); });

    // Close on overlay click
    [loginModal, registerModal].forEach(m => m.addEventListener('click', e => { if (e.target === m) m.classList.remove('active'); }));

    document.getElementById('loginSubmit').addEventListener('click', () => {
        const email = document.getElementById('loginEmail').value.trim();
        const pass  = document.getElementById('loginPassword').value.trim();
        if (!email || !pass) { alert('Please fill in all fields.'); return; }
        alert('Login successful! (Demo mode)');
        loginModal.classList.remove('active');
    });

    document.getElementById('registerSubmit').addEventListener('click', () => {
        const name    = document.getElementById('regName').value.trim();
        const email   = document.getElementById('regEmail').value.trim();
        const pass    = document.getElementById('regPassword').value.trim();
        const confirm = document.getElementById('regConfirm').value.trim();
        if (!name || !email || !pass || !confirm) { alert('Please fill in all fields.'); return; }
        if (pass !== confirm) { alert('Passwords do not match.'); return; }
        alert('Account created! (Demo mode)');
        registerModal.classList.remove('active');
    });
</script>
</body>
</html>