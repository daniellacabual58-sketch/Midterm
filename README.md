# Daniella Cabual | Personal Portfolio

A static responsive website using HTML, CSS, and JavaScript. No server, database, packages, or build step is required.

## Preview
Extract the ZIP. Open `index.html` to preview the six main pages. For a full browser test with LocalStorage and clipboard support, use VS Code Live Server or run `python -m http.server 8000` inside this folder and open `http://localhost:8000`.

## Before publishing
- Verify Daniella approves the portrait and all personal information for public display. The portrait was cropped from her prior seminar journal. The documented seminar, education, and certification details were used where available. The Projects page uses the four screenshots provided by the user.
- The supplied Gmail address is configured in `js/contact-config.js` and displayed on the Contact page. Add approved social profile URLs there when available. Confirm the email and screenshots are suitable for public display. The form validates locally, opens an email draft if an email is configured, and never claims to send messages without a backend. A copy action is available.
- Review skill labels and project descriptions, and revise if necessary. Confirm the descriptive project titles and technology labels before submission.

## GitHub Pages (free hosting)
1. Sign in to GitHub and create a new public repository, e.g. `daniella-portfolio`.
2. Extract the ZIP and upload the **contents** of the `daniella_portfolio` folder to the repository root. Keep `index.html`, the other HTML files, and all `css`, `js`, `images` folders in their relative paths.
3. Commit the files to the `main` branch.
4. In the repository, open Settings > Pages. Under Build and deployment, select Deploy from a branch, select `main` and `/ (root)`, and save.
5. When GitHub displays the published URL, open it and test all six pages, project filters, image previews, and the contact form. The typical URL is `https://YOUR_USERNAME.github.io/daniella-portfolio/` (replace YOUR_USERNAME).
6. Submit the actual live link once it works. This archive is not a deployed website.

## Files
- `index.html`, `about.html`, `skills.html`, `projects.html`, `resume.html`, `contact.html`: six main static pages
- `css/style.css`: responsive layout and light/dark theme
- `js/script.js`: mobile navigation, persistent theme, scroll-to-top, typing effect, filtering, image modal, and contact form validation
- `js/contact-config.js`: public email and social profiles
- `images/`: local portrait, favicon and four supplied project screenshots

No API keys or external services are required.
