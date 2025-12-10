# Portfolio Blog

A personal portfolio and blog built with Laravel, PHP, and Tailwind CSS. This project demonstrates modern web development practices including MVC architecture, responsive design, and dynamic routing.

## Features

- **Responsive Design**: Built with Tailwind CSS for a seamless experience on mobile, tablet, and desktop.
- **Dynamic Routing**: Powered by Laravel's routing and controller system.
- **Blade Templating**: Reusable components and layouts for efficient frontend development.
- **Blog Architecture**: Scalable structure to easily connect a database for blog posts.
- **Contact Form**: Styled, responsive contact form (frontend ready).

## Technologies Used

- **Laravel 12**: PHP Framework for robust backend structure.
- **PHP 8.4**: Server-side scripting language.
- **Tailwind CSS 4**: Utility-first CSS framework for styling.
- **Vite**: Modern frontend build tool.
- **Git**: Version control.

## Getting Started

1.  **Clone the repository**:
    ```bash
    git clone https://github.com/Sevylo/portfolio-blog.git
    cd portfolio-blog
    ```

2.  **Install Dependencies**:
    ```bash
    composer install
    npm install
    ```

3.  **Environment Setup**:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  **Run the Application**:
    ```bash
    npm run dev
    php artisan serve
    ```
    Visit `http://localhost:8000`

## Project Structure

- `app/Http/Controllers/PageController.php`: Handles page logic and data.
- `resources/views/layouts/app.blade.php`: Main layout file.
- `resources/views/welcome.blade.php`: Home page.
- `routes/web.php`: Route definitions.
