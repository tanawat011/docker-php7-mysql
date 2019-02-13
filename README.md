# How to...

## ขั้นตอนการตั้งค่า Password MySQL หลังจากที่ run docker container

- เมื่อ run docker container เสร็จแล้วให้ execute เข้าไปภายใน container โดยใช้คำสั่ง ```docker exec -it mysql-container bash```
- ถัดมาเราจะอยู่ภายใน docker container แล้ว ให้พิมคำสั่งต่อไป ```mysql -u root -p``` จากนั้นก็ใส่ password ตามที่เคยตั้งค่าไว้ที่ docker-compose
- ถัดมาคำสั่งสุดท้าย ```ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'new_password';```
- เสร็จแล้วก็ออกจาก container ได้เลยครับ โดยใช้คำสั่ง ```quit;``` และครั้งที่ 2 ก็ ```exit```
- ทดสอบ login ใหม่ที่หน้าหลัก phpmyadmin ได้เลยครับ

#### อ้างอิงวิธีการแก้ไขจาก

- https://medium.com/printcode/%E0%B8%A7%E0%B8%B4%E0%B8%98%E0%B8%B5%E0%B8%95%E0%B8%B4%E0%B8%94%E0%B8%95%E0%B8%B1%E0%B9%89%E0%B8%87-mysql-server-%E0%B9%81%E0%B8%A5%E0%B8%B0-phpmyadmin-%E0%B8%9A%E0%B8%99-docker-step-by-step-4a86c48f29da
