# Digital Agency WordPress Theme

A high-end, editorial-style WordPress theme for digital agencies, built with a focus on typography, immersive layouts, and modern interactions.

## Features
- **Editorial Hero Section**: Bold typography and immersive background accents.
- **Bento Grid Services**: A modern way to showcase agency expertise.
- **Functional Contact Form**: Built-in AJAX-ready contact form with backend handling in `functions.php`.
- **Responsive Design**: Mobile-first approach using Tailwind CSS utility classes.
- **Custom Templates**: Dedicated "Contact Us" page template.

## Local Installation Guide

To run this theme on your local machine using WordPress (e.g., Local by Flywheel, XAMPP, or MAMP), follow these steps:

### 1. Set Up Your Local WordPress Environment
If you haven't already, install a local WordPress development tool:
- [Local by Flywheel](https://localwp.com/) (Recommended)
- [XAMPP](https://www.apachefriends.org/index.html)
- [MAMP](https://www.mamp.info/)

Create a new WordPress site using one of these tools.

### 2. Install the Theme
1. Navigate to your local WordPress installation directory.
2. Go to `wp-content/themes/`.
3. Create a new folder named `digital-agency-theme`.
4. Copy all files from the `wordpress-theme` directory of this project into that new folder.

Your structure should look like this:
`wp-content/themes/digital-agency-theme/`
- `style.css`
- `functions.php`
- `index.php`
- `header.php`
- `footer.php`
- `front-page.php`
- `page-contact-us.php`
- ... (other files)

### 3. Activate the Theme
1. Log in to your WordPress Admin Dashboard (usually `http://your-site.local/wp-admin`).
2. Go to **Appearance > Themes**.
3. Find "Digital Agency Theme" and click **Activate**.

### 4. Set Up the Front Page
1. Go to **Settings > Reading**.
2. Under "Your homepage displays", select **A static page**.
3. For "Homepage", select the page you want as your front page (WordPress will automatically use `front-page.php` if it exists).

### 5. Set Up the Contact Page
1. Go to **Pages > Add New**.
2. Title it "Contact Us".
3. In the **Page Attributes** section on the right, under "Template", select **Contact Us**.
4. Publish the page.
5. Ensure the permalink is `contact-us` so the links in the header work correctly.

## Development Notes

### Tailwind CSS
This theme uses Tailwind CSS for styling. In this project, it is loaded via CDN for preview purposes. For a production environment, it is recommended to set up a proper Tailwind build process (using PostCSS or the Tailwind CLI) to purge unused classes and optimize performance.

### Contact Form
The contact form uses the WordPress `admin-post.php` handler. The logic for processing submissions is located in `functions.php` under the `submit_contact_form` action.

## Support
For any questions or further customization, please reach out to:
**Email**: abiramvr9@gmail.com
**Phone**: 6369398051
