<p align="center">
  <img src="https://img.icons8.com/fluency/96/000000/books.png" alt="BookLover Logo" width="80"/>
  <h1 align="center">📚 BookLover</h1>
  <p align="center">
    <strong>A full-featured Library Management System built with Laravel 10</strong>
  </p>
  <p align="center">
    <a href="#features">Features</a> •
    <a href="#tech-stack">Tech Stack</a> •
    <a href="#installation">Installation</a> •
    <a href="#usage">Usage</a> •
    <a href="#architecture">Architecture</a> •
    <a href="#contributing">Contributing</a> •
    <a href="#license">License</a>
  </p>
  <p align="center">
    <img src="https://img.shields.io/badge/Laravel-10.0-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 10"/>
    <img src="https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.2+"/>
    <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL"/>
    <img src="https://img.shields.io/badge/Blade-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Blade"/>
    <img src="https://img.shields.io/badge/License-MIT-green?style=for-the-badge" alt="MIT License"/>
  </p>
</p>

---

## 📖 About

**BookLover** is a comprehensive library management web application that enables users to browse, search, request, borrow, and return books — all through an intuitive web interface. It features a complete admin panel, dual payment gateway integration (bKash & SSLCommerz), a user dashboard with book request/approval workflows, and much more.

Whether you're managing a personal book collection, a community library, or a small institutional library, BookLover provides all the tools you need.

---

## ✨ Features

### 📚 Book Management
- **Browse & Discover** — View all available books with cover images, authors, categories, and publishers
- **Search & Advanced Search** — Find books quickly by title, author, category, tags, or publisher
- **Top Borrowed Books** — Discover the most popular borrowed books
- **Top Searched Books** — See trending searches across the platform
- **Book Upload** — Users can upload and share their own books

### 👤 User System
- **Authentication** — Full registration, login, and email verification via Laravel Auth
- **User Profiles** — Public profile pages showcasing user activity and uploaded books
- **User Dashboard** — Personal dashboard for managing books, requests, and orders

### 📋 Request & Borrow Workflow
- **Book Requests** — Users can request to borrow any available book
- **Request Management** — View, update, and delete pending requests
- **Approval System** — Book owners can approve or reject borrow requests
- **Order Tracking** — Track all borrowing orders with statuses
- **Book Returns** — Streamlined return process with owner confirmation

### 🔐 Admin Panel
- **Separate Admin Authentication** — Dedicated admin login with password reset support
- **Book Administration** — Full CRUD operations with approval/unapproval workflow
- **Author Management** — Create, view, update, and delete author records
- **Category Management** — Organize books into categories with CRUD operations
- **Publisher Management** — Manage publisher records with full CRUD
- **Content Moderation** — Review and approve/unapprove user-submitted books

### 💳 Payment Integration
- **bKash Tokenized Payment** — Bangladesh's leading mobile payment gateway
  - Create payments, search transactions, process refunds
- **SSLCommerz** — Full-featured payment gateway with:
  - Easy checkout & hosted checkout options
  - AJAX-based payments
  - IPN (Instant Payment Notification) support
  - Success, fail, and cancel handlers

### 🧩 Additional Features
- **Category Filtering** — Browse books by specific categories
- **Tags System** — Flexible book tagging for better discoverability
- **Translators Support** — Track translators for translated works
- **Image Slider** — Dynamic homepage slider for featured content
- **Rules Page** — Display library rules and guidelines
- **Geolocation** — Position/coordinates tracking support

---

## Screenshots:
<img width="1425" height="809" alt="Screenshot 2026-03-24 at 03 26 51" src="https://github.com/user-attachments/assets/0f1cd608-ec55-4e16-b845-66ac8bfc87c2" />
<img width="1381" height="799" alt="Screenshot 2026-03-24 at 03 27 07" src="https://github.com/user-attachments/assets/1f1f425d-f50a-4268-af4e-2174a88f8968" />
<img width="1386" height="805" alt="Screenshot 2026-03-24 at 03 27 32" src="https://github.com/user-attachments/assets/eef06f3c-3868-4183-9260-c60bb4ab0316" />
<img width="1425" height="792" alt="Screenshot 2026-03-24 at 03 30 14" src="https://github.com/user-attachments/assets/4ba69d7c-b837-48b3-a2f3-e5490b11ecaf" />
<img width="1413" height="781" alt="Screenshot 2026-03-24 at 03 31 04" src="https://github.com/user-attachments/assets/26c7fd09-3407-4671-bb80-511b732fee93](https://github.com/user-attachments/assets/7d847b5d-cc4d-4ff2-9695-1b8ba47ef5e5" />
<img width="1412" height="780" alt="Screenshot 2026-03-24 at 03 31 26" src="https://github.com/user-attachments/assets/26c7fd09-3407-4671-bb80-511b732fee93" />
<img width="1423" height="813" alt="Screenshot 2026-03-24 at 03 31 36" src="https://github.com/user-attachments/assets/9a69c111-0ac5-4747-9ba8-e937437ebc89" />
<img width="1421" height="809" alt="Screenshot 2026-03-24 at 03 31 49" src="https://github.com/user-attachments/assets/ab52f60b-ec64-4ac8-ac92-591c5aac9313" />
<img width="1402" height="786" alt="Screenshot 2026-03-24 at 03 32 48" src="https://github.com/user-attachments/assets/dccf6e0c-ad0c-4282-ada4-3eb7a1c360eb" />
<img width="1421" height="808" alt="Screenshot 2026-03-24 at 03 32 57" src="https://github.com/user-attachments/assets/068b2669-febb-49ed-be04-295d635cbecb" />
<img width="1342" height="687" alt="Screenshot 2026-03-24 at 04 42 32" src="https://github.com/user-attachments/assets/515cf15c-f8e5-4133-af20-bc35ae75fd04" />
<img width="1309" height="790" alt="Screenshot 2026-03-24 at 03 33 22" src="https://github.com/user-attachments/assets/4f0a7237-8c49-4d7b-a06b-d57d99e90c59" />
<img width="1422" height="808" alt="Screenshot 2026-03-24 at 03 33 31" src="https://github.com/user-attachments/assets/72aac717-e87d-4c34-9fe1-b0b26516d150" />
<img width="1183" height="589" alt="Screenshot 2026-03-24 at 03 34 46" src="https://github.com/user-attachments/assets/d20c3fcb-7c71-47ef-be93-aef4832872cd" />
<img width="1386" height="760" alt="Screenshot 2026-03-24 at 03 35 04" src="https://github.com/user-attachments/assets/987efbd5-a692-4fc6-aa78-fed9391a6125" />
<img width="1440" height="900" alt="Screenshot 2026-03-24 at 03 35 16" src="https://github.com/user-attachments/assets/3b68ee53-5937-406e-9717-63ef97974fc3" />
<img width="1317" height="790" alt="Screenshot 2026-03-24 at 03 35 54" src="https://github.com/user-attachments/assets/b3bb70f5-fac1-42f4-81b3-16db738b55ac" />
<img width="1362" height="766" alt="Screenshot 2026-03-24 at 03 36 10" src="https://github.com/user-attachments/assets/4f6ad829-7e6c-44fa-b14f-debab3e69031" />
<img width="1397" height="805" alt="Screenshot 2026-03-24 at 03 37 32" src="https://github.com/user-attachments/assets/4c0931bc-ff2d-49eb-abb8-897a9071c4b5" />
<img width="925" height="496" alt="Screenshot 2026-03-24 at 03 38 48" src="https://github.com/user-attachments/assets/af102be4-e80a-4ac3-aff5-0553a4f10da0" />
<img width="1419" height="807" alt="Screenshot 2026-03-24 at 04 36 06" src="https://github.com/user-attachments/assets/4d154d4a-0fa3-453e-b0a2-37c6a8ca3493" />
<img width="1416" height="810" alt="Screenshot 2026-03-24 at 04 36 41" src="https://github.com/user-attachments/assets/08caab1d-d57b-416b-89a2-a3556e4d09a8" />
<img width="1378" height="648" alt="Screenshot 2026-03-24 at 04 39 02" src="https://github.com/user-attachments/assets/4b3e68ae-e388-4312-8111-2b8a0887e94c" />
<img width="1161" height="556" alt="Screenshot 2026-03-24 at 04 39 11" src="https://github.com/user-attachments/assets/c70f58f9-5d8b-41a3-84ee-f508db6f8814" />
<img width="1192" height="604" alt="Screenshot 2026-03-24 at 04 39 22" src="https://github.com/user-attachments/assets/5c9fbcbf-e352-4746-bdfc-812e19edbdbc" />
<img width="1177" height="553" alt="Screenshot 2026-03-24 at 04 39 29" src="https://github.com/user-attachments/assets/ad8a2005-821f-4ecc-a332-bd3314388cfa" />

---

## 🛠️ Tech Stack

| Layer | Technology |
|:------|:-----------|
| **Framework** | Laravel 10.0 |
| **Language** | PHP 8.2+ |
| **Frontend** | Blade Templates (49.3%), Vue.js (0.1%) |
| **Database** | MySQL |
| **Authentication** | Laravel UI with Email Verification |
| **Payments** | bKash Tokenized API, SSLCommerz |
| **HTTP Client** | Guzzle 7.x |
| **Build Tool** | Laravel Mix (Webpack) |
| **Testing** | PHPUnit 10 |

---

## 🏗️ Architecture

### Directory Structure

```
BookLover/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Auth/                    # User & Admin authentication
│   │       ├── Backend/                 # Admin panel controllers
│   │       │   ├── BooksController.php
│   │       │   ├── AuthorsController.php
│   │       │   ├── CategoriesController.php
│   │       │   └── PublishersController.php
│   │       ├── BooksController.php      # Public book operations
│   │       ├── CategoriesController.php # Category browsing
│   │       ├── DashboardsController.php # User dashboard
│   │       ├── UsersController.php      # User profiles
│   │       ├── BkashTokenizePaymentController.php
│   │       ├── SslCommerzPaymentController.php
│   │       ├── PagesController.php      # Static pages
│   │       ├── PositionController.php   # Geolocation
│   │       └── Rulecontroller.php       # Rules page
│   ├── Notifications/                   # Email & app notifications
│   ├── Library/                         # Custom library classes
│   ├── Providers/                       # Service providers
│   │
│   │── Admin.php          # Admin model
│   │── Author.php         # Author model
│   │── Book.php           # Book model
│   │── BookAuthor.php     # Book-Author pivot
│   │── BookRequest.php    # Borrow request model
│   │── BookTag.php        # Book-Tag pivot
│   │── Category.php       # Category model
│   │── Publisher.php       # Publisher model
│   │── Slider.php         # Homepage slider model
│   │── Tag.php            # Tag model
│   │── Translator.php     # Translator model
│   └── User.php           # User model
│
├── database/
│   ├── factories/         # Model factories
│   ├── migrations/        # Schema migrations
│   └── seeds/             # Database seeders
│
├── resources/             # Blade views & assets
├── routes/
│   └── web.php            # All application routes
├── public/                # Public assets
├── config/                # Configuration files
├── books.sql              # Sample database dump
├── Diagram.png            # System architecture diagram
├── composer.json          # PHP dependencies
└── package.json           # Node.js dependencies
```

### Entity Relationship

```mermaid
erDiagram
    USER ||--o{ BOOK : uploads
    USER ||--o{ BOOK_REQUEST : creates
    BOOK ||--o{ BOOK_REQUEST : receives
    BOOK ||--o{ BOOK_AUTHOR : has
    AUTHOR ||--o{ BOOK_AUTHOR : belongs_to
    BOOK ||--o{ BOOK_TAG : has
    TAG ||--o{ BOOK_TAG : belongs_to
    BOOK }o--|| CATEGORY : belongs_to
    BOOK }o--|| PUBLISHER : published_by
    BOOK }o--o| TRANSLATOR : translated_by
    ADMIN ||--o{ BOOK : moderates
```

---

## 🚀 Installation

### Prerequisites

- **PHP** >= 8.2
- **Composer** >= 2.x
- **MySQL** >= 5.7
- **Node.js** >= 14.x & **npm**
- **XAMPP** / **Laravel Valet** / any local server environment

### Steps

**1. Clone the repository**

```bash
git clone https://github.com/MahirAzmain/BookLover.git
cd BookLover
```

**2. Install PHP dependencies**

```bash
composer install
```

**3. Install Node.js dependencies**

```bash
npm install
```

**4. Configure environment**

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` with your database and payment gateway credentials:

```env
APP_NAME=BookLover
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=booklover
DB_USERNAME=root
DB_PASSWORD=

# bKash Configuration
BKASH_TOKENIZE_SANDBOX=true
BKASH_TOKENIZE_APP_KEY=your_app_key
BKASH_TOKENIZE_APP_SECRET=your_app_secret
BKASH_TOKENIZE_USERNAME=your_username
BKASH_TOKENIZE_PASSWORD=your_password

# SSLCommerz Configuration
SSLCOMMERZ_STORE_ID=your_store_id
SSLCOMMERZ_STORE_PASSWORD=your_store_password
```

**5. Set up the database**

```bash
# Run migrations
php artisan migrate

# (Optional) Import sample data
mysql -u root -p booklover < books.sql

# (Optional) Seed the database
php artisan db:seed
```

**6. Compile frontend assets**

```bash
npm run dev
```

**7. Start the development server**

```bash
php artisan serve
```

Visit **[http://localhost:8000](http://localhost:8000)** in your browser. 🎉

---

## 📘 Usage

### User Roles

| Role | Access |
|:-----|:-------|
| **Guest** | Browse books, search, view categories |
| **Registered User** | All guest features + upload books, request borrows, manage dashboard, make payments |
| **Admin** | Full system management via `/admin` — manage books, authors, categories, publishers, approve/reject content |

### Key Routes

| Route | Description |
|:------|:------------|
| `/` | Homepage with featured slider |
| `/books` | Browse all books |
| `/books/search` | Search books |
| `/books/{slug}` | Book details page |
| `/books/upload/new` | Upload a new book |
| `/user/profile/{username}` | Public user profile |
| `/dashboard` | User dashboard |
| `/dashboard/books/request-list` | Manage borrow requests |
| `/dashboard/books/order-list` | View order history |
| `/admin` | Admin panel |
| `/bkash/payment` | bKash payment gateway |
| `/top-borrowed` | Most borrowed books |
| `/top-searchbooks` | Trending searches |
| `/rules` | Library rules & guidelines |

---

## 🧪 Testing

Run the test suite with PHPUnit:

```bash
php artisan test
# or
./vendor/bin/phpunit
```

---

## 🤝 Contributing

Contributions are welcome! Here's how you can help:

1. **Fork** the repository
2. **Create** a feature branch (`git checkout -b feature/amazing-feature`)
3. **Commit** your changes (`git commit -m 'Add amazing feature'`)
4. **Push** to the branch (`git push origin feature/amazing-feature`)
5. **Open** a Pull Request

Please ensure your code follows the existing code style and includes appropriate tests.

---

## 📄 License

This project is licensed under the **MIT License** — see the [LICENSE](LICENSE) file for details.

---

## 👤 Author

**Mahir Azmain Haque**

- GitHub: [@MahirAzmain](https://github.com/MahirAzmain)

---

<p align="center">
  Made with Laravel
</p>
