<div class="sidepanel" id="sidepanel">
    <div class="title">
        Contents
    </div>
    <div class="content">
        <code id="aboutMe">
            aboutMe
        </code>
        <code id="Education">
            Education
        </code>
        <code id="Skill">
            Skill
        </code>
        <code id="Project">
            Project
        </code>
        <code class="workExp">
            Work Experience
        </code>
        <code id="Certificate">
            Certificate
        </code>
        <code id="Language">
            Language
        </code>
    </div>
</div>

<script>
    document.getElementById('aboutMe').addEventListener('click', () => {
        window.open('/','_self');
    });

    document.getElementById('Education').addEventListener('click', () => {
        window.open('/contents/education.php','_self');
    });

    document.getElementById('Skill').addEventListener('click', () => {
        window.open('/contents/skill.php','_self');
    });

    document.getElementById('Project').addEventListener('click', () => {
        window.open('/contents/project.php','_self');
    });

    document.getElementById('workExp').addEventListener('click', () => {
        window.open('/contents/workExp.php','_self');
    });

    document.getElementById('Certificate').addEventListener('click', () => {
        window.open('/contents/certificate.php','_self');
    });

    document.getElementById('Language').addEventListener('click', () => {
        window.open('/contents/language.php','_self');
    });
</script>