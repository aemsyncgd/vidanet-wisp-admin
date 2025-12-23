
// Theme Switching Logic
$(document).ready(function () {
    // 1. Initialize State
    const storedTheme = localStorage.getItem('theme') || 'system';
    applyTheme(storedTheme);

    // 2. Button Listeners
    $('#btnThemeLight').click(function () {
        applyTheme('light');
    });

    $('#btnThemeDark').click(function () {
        applyTheme('dark');
    });

    $('#btnThemeSystem').click(function () {
        applyTheme('system');
    });

    // 3. System Change Listener
    window.matchMedia('(prefers-color-scheme: dark)').addListener(function (e) {
        if (localStorage.getItem('theme') === 'system') {
            applyTheme('system');
        }
    });

    function applyTheme(theme) {
        // Save to Storage
        localStorage.setItem('theme', theme);

        // Remove explicit class first
        $('body').removeClass('dark-theme');

        let effectiveTheme = theme;
        if (theme === 'system') {
            const isDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
            effectiveTheme = isDark ? 'dark' : 'light';
        }

        // Apply class
        if (effectiveTheme === 'dark') {
            $('body').addClass('dark-theme');
        }

        // Update UI Buttons
        updateThemeUI(theme);
    }

    function updateThemeUI(activeTheme) {
        // Reset all buttons
        $('#btnThemeLight').removeClass('btn-primary').addClass('btn-default');
        $('#btnThemeDark').removeClass('btn-primary').addClass('btn-default');
        $('#btnThemeSystem').removeClass('btn-primary').addClass('btn-default');

        // Activate current
        if (activeTheme === 'light') {
            $('#btnThemeLight').removeClass('btn-default').addClass('btn-primary');
        } else if (activeTheme === 'dark') {
            $('#btnThemeDark').removeClass('btn-default').addClass('btn-primary');
        } else {
            $('#btnThemeSystem').removeClass('btn-default').addClass('btn-primary');
        }
    }
});
