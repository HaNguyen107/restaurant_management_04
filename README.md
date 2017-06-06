# restaurant_management_04

# Manage restaurant
## User
- Can see menu, search and order dishes in categories
- Can book table and decide to book dishes at the same time or not.
- Can review restaurant
- Can comment dishes, restaurant
## Admin
- Manage menu: add, show, edit, delete dishes, menu by date, month
- manage categories: add, show, edit, delete categories.
- Manage staff: add, show, edit, delete information.
- Check staff working-days in month, statistic salary.
- Manage bill: create, edit, show, delete export bills (with table, customer, staff)
- Manage table: check customer's order table
- Manage revenue and expenditure.
- Statistic revenue and expenditure.
- Statistic dishes have highest order by day, month.
## System
- Mail to customer when book table, give suggest newest dishes
- Mail to all customer when restaurant have new dish.

# Step by step
1. Design database
2. Add tasks on redmine + estimate time
3. Init project
4. Init models, add relationship
5. Design static pages
6. Signup / Login / Logout
7. Other pulls

# Step to update task on redmine
1. Change Status to "In Progress", "Due date"
2. Update  "Spent time", "% Done (100)",  before send pull request to trainer 
3. If trainer COMMENT, change "% Done (80)", after that continue to fix comment; if not, move to step 4
4. After MERGED, update task infomation "spent time", "% Done (100)", Status to "Resolved" 

# Notice: 
Trừ pull init project và init model, các pull khác không quá 15 files thay đổi
Các bạn trong team review chéo cho nhau + comment OK vào pull sau khi review xong mà không có lỗi nào

# [Framgia Coding Standard PHP]
https://github.com/framgia/coding-standards/tree/master/vn/php

# Sử dụng PHP-Code-Sniffer check code convention with Sublime Text 
1. https://gist.github.com/tuanpht/98da682333dd1bc8e4516417653158aa 
2. https://github.com/wataridori/framgia-php-codesniffer
