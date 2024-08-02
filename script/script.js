let currentSection = '';

        function toggleSection(sectionId, button) {
            const sections = document.querySelectorAll('.plan-container');
            const buttons = document.querySelectorAll('.hostplan-button-rectangle button');

            if (currentSection === sectionId) {
                sections.forEach(section => section.classList.remove('active'));
                buttons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('inactive');
            });
            currentSection = '';
            } else {
                sections.forEach(section => section.classList.remove('active'));
                const activeSection = document.getElementById(sectionId);
                activeSection.classList.add('active');
                buttons.forEach(btn => {
                btn.classList.remove('active');
                btn.classList.add('inactive');
            });

                button.classList.add('active');
            button.classList.remove('inactive');
                currentSection = sectionId;
            }
        }
        document.getElementById('btn-hosting').classList.add('active');
        document.getElementById('btn-hosting').classList.remove('inactive');
        document.getElementById('hosting').classList.add('active');
        currentSection = 'hosting';