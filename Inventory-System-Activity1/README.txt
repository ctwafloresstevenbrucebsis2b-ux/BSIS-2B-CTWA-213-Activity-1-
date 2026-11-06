ACTIVITY #1 FINAL TERM - INVENTORY SYSTEM

fEATURES
- Sign in and register pages
- Registration requires administrator approval
- Dashboard
- Admin user list, approve and reject actions
- Products CRUD (create, read, update, delete)
- Logout
- Password hashing and CSRF form tokens

Open http://localhost/Inventory-System-Activity1/setup_admin.php
Create admin account po.
Delete setup_admin.php nyo po agad after creating the admin.
Visit http://localhost/Inventory-System-Activity1/index.php

tESTING
1. Sign in as admin.
2. Add, edit and delete products.
3. Register a normal account in another browser window.
4. Sign in as admin and approve it under Pending registrations.
5. The normal user can now sign in.
6. Test Logout.

DATABASE
users: id, username, password, status, role, created_at
products: id, name, description, quantity, price, created_at, created_by, updated_at

