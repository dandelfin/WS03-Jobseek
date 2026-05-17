<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post a Job – Jobseek</title>
    <link rel="stylesheet" href="/WS03/public/css/style.css">
</head>
<body>

<nav class="navbar">
    <div class="logo">Jobseek</div>
    <div>
        <a href="/WS03/public/">Home</a>
        <a href="/WS03/public/listings">All Jobs</a>
    </div>
</nav>

<section class="container" style="max-width:680px;">
    <h2>Post a Job</h2>

    <div id="successMsg" class="flash-success" style="display:none;">
        ✅ Job posted successfully! (Demo mode)
    </div>

    <div class="form-group">
        <label for="jobTitle">Job Title *</label>
        <input type="text" id="jobTitle" placeholder="e.g. Senior PHP Developer">
    </div>

    <div class="form-group">
        <label for="jobDesc">Job Description *</label>
        <textarea id="jobDesc" placeholder="Describe the role, responsibilities, and requirements..."></textarea>
    </div>

    <div class="form-group">
        <label for="jobSalary">Salary</label>
        <input type="text" id="jobSalary" placeholder="e.g. $80,000 or $40/hr">
    </div>

    <div class="form-group">
        <label for="jobLocation">Location *</label>
        <input type="text" id="jobLocation" placeholder="e.g. New York, NY">
    </div>

    <div class="form-group">
        <label for="jobTags">Tags <small style="color:#888">(comma-separated)</small></label>
        <input type="text" id="jobTags" placeholder="e.g. PHP, Laravel, MySQL">
    </div>

    <button class="submit-btn" id="postJobBtn">Post Job</button>
</section>

<script>
    document.getElementById('postJobBtn').addEventListener('click', function () {
        const title    = document.getElementById('jobTitle').value.trim();
        const desc     = document.getElementById('jobDesc').value.trim();
        const location = document.getElementById('jobLocation').value.trim();

        if (!title || !desc || !location) {
            alert('Please fill in the required fields: Title, Description, and Location.');
            return;
        }

        // Show success message and clear form
        document.getElementById('successMsg').style.display = 'block';
        document.getElementById('jobTitle').value    = '';
        document.getElementById('jobDesc').value     = '';
        document.getElementById('jobSalary').value   = '';
        document.getElementById('jobLocation').value = '';
        document.getElementById('jobTags').value     = '';

        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
</script>
</body>
</html>