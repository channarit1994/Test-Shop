# 🛍️ Test Shop

## 📄 Description
**Test Shop** is a simple demo project for testing the **Omise Payment Gateway** integration.
It uses **HTML5**, **JavaScript**, and **PHP** to create a basic checkout page and securely process payments via Omise API.

---

## ⚙️ Tech Stack
- ✅ HTML5
- ✅ CSS (Bootstrap 5)
- ✅ JavaScript (Omise.js, SweetAlert2)
- ✅ PHP (with Omise PHP library)

---

## 📂 Project Structure

```
/Test-Shop
 ├── index.html           # Main checkout page
 ├── charge/
 │   ├── index.php        # Server-side charge handler
 │   └── omise-php/       # Omise PHP library
 ├── .gitattributes
 ├── .git/                # Local Git repository files
```

---

## 🚀 How to Run

1. **Clone the repository**
   ```bash
   git clone https://github.com/channarit1994/Test-Shop.git
   cd Test-Shop/Test-Shop
   ```

2. **Set your Omise Keys**
   - In your JavaScript (inside `index.html` or a linked JS file):
     ```javascript
     Omise.setPublicKey('pkey_test_xxxx');
     ```
   - In `charge/index.php`:
     ```php
     define('OMISE_PUBLIC_KEY', 'pkey_test_xxxx');
     define('OMISE_SECRET_KEY', 'skey_test_xxxx');
     ```

3. **Run a local server**
   ```bash
   php -S localhost:8000
   ```

4. **Open the checkout page**
   - Visit [http://localhost:8000/index.html](http://localhost:8000/index.html)
   - Use Omise test card details to test payments.

---

## ⚠️ Notes

- Always use **Omise Test Keys** for development.
- Do not use real credit card information for testing.
- Use **Live Keys** only for production, with HTTPS and secure validation.

---

## 📚 Resources

- [Omise API Documentation](https://docs.omise.co)
- [Omise PHP Library](https://github.com/omise/omise-php)
- [Omise.js Guide](https://docs.omise.co/omise-js/)

---

## 🌐 Demo

You can try the live demo here: [https://channarit.com/](https://channarit.com/)

---

## 📜 License

This project is for learning and testing purposes only.

---

Made with ❤️ by [Channarit Sittiparat](https://github.com/channarit1994)
