# Keep It Simple - Custom WordPress Theme

A clean, semantic, and modern WordPress theme converted from static HTML/CSS into a fully dynamic and modular WordPress theme, developed strictly following the **WordPress Coding Standards (WPCS)** and modern security best practices.

<!-- Live demo placeholder (To be updated in Day 5) -->
> **Live Demo:** [Click here to explore the live theme preview](https://keepit.xo.je/)

---

## 📌 Project Overview

This project showcases an enterprise-oriented conversion of a multi-page static HTML template into a modular WordPress theme. It leverages core WordPress APIs, proper asset enqueuing, strict data sanitization and output escaping, and dynamic content management powered by Advanced Custom Fields (ACF) with automated local JSON synchronization.

---

## 🚀 Key Features

* **WordPress Coding Standards & Security:**
  * Strict output escaping (`esc_html`, `esc_url`, `esc_attr`) applied across all template parts to prevent XSS vulnerabilities.
  * Standardized translation functions (`esc_html__`, `esc_html_e`) for localization readiness.
* **Modern Asset Pipeline:**
  * Clean dependency management using `wp_enqueue_scripts` inside `functions.php` (zero hardcoded script/style tags in header/footer).
  * Automated RTL stylesheet loading support (`is_rtl()`).
* **Dynamic Custom Content:**
  * Custom page template (`page-templates/template-custom.php`) integrated with **Advanced Custom Fields (ACF)**.
  * **Local JSON Synchronization:** Field groups automatically track changes in version control via `/acf-json`, enabling seamless deployment across environments.
* **Core WordPress Integration:**
  * Full integration with WordPress Core Navigation Menus (`wp_nav_menu`) and dynamic active class filtering.
  * Dynamic sidebar and widget areas registered via `widgets_init` with sensible fallback content.
  * Accessible standard post pagination using `the_posts_pagination()`.

---

## 🛠 Tech Stack

* **Core:** PHP 8.x, WordPress Theme API, Hooks API (Actions & Filters)
* **Frontend:** HTML5, CSS3 (BEM naming convention), JavaScript (jQuery-dependent custom scripts)
* **Plugins/Tools:** Advanced Custom Fields (ACF), Git & GitHub

---

## 📂 Theme Directory Structure

```text
├── acf-json/               # Automated ACF JSON field definitions
├── assets/
│   ├── css/                # Base, main, and RTL stylesheets
│   ├── js/                 # Modular JavaScript files (Modernizr, FontAwesome, main.js)
│   └── images/             # Theme interface assets
├── docs/
│   └── screenshots/        # Project and ACF dashboard preview screenshots
├── page-templates/         # Custom page templates (e.g., template-custom.php)
├── .gitignore              # Environment and system ignore rules
├── footer.php              # Standardized footer template with dynamic widgets
├── functions.php           # Enqueuing, theme supports, navigation, & ACF hooks
├── header.php              # Standardized header with wp_head & semantic navigation
├── index.php               # Main blog template with The Loop & pagination
├── page.php                # Default static page template
├── README.md               # Comprehensive theme documentation and setup guide
├── screenshot.png          # Theme preview for WordPress Dashboard
├── sidebar.php             # Main widget area with dynamic fallbacks
├── single.php              # Single blog post template with comments & navigation
└── style.css               # Main theme stylesheet & metadata
```
---
⚙️ Installation & Setup
Clone the Repository:
Clone the repository into your WordPress installation's themes directory:

Bash
cd wp-content/themes/
git clone [https://github.com/moustapha-tata/html2wp-keep-it-simple.git](https://github.com/moustapha-tata/html2wp-keep-it-simple.git)
Activate the Theme:

Go to WordPress Admin Dashboard > Appearance > Themes.

Locate Keep It Simple and click Activate.

Install Required Plugins:

Install and activate Advanced Custom Fields (ACF).

The custom field groups will sync automatically from the /acf-json directory.

Assign Custom Page Template:

Create or edit a page.

Under Page Attributes > Template, choose Custom Page.

Populate the ACF fields (Hero Title, Hero Description, Button URL) and publish.

📄 License & Credits
Original HTML Template: Designed by [StyleShout](https://www.styleshout.com/).

WordPress Theme Development: Developed by [Moustapha Mahmoud](https://github.com/moustapha-tata).

Released under the [GPL v2 or later](https://www.gnu.org/licenses/gpl-2.0.html).