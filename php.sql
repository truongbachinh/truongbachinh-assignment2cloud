
CREATE TABLE toy (
id SERIAL,
id_kindtoy INT NOT NULL,
toyname VARCHAR(255) NOT NULL,
price INT NOT NULL,
brand VARCHAR(255) NOT NULL,
made VARCHAR(255) NOT NULL,
toydescription VARCHAR(510) NOT NULL,
img VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO toy (id_kindtoy, toyname, price, brand, made, toydescription, img) VALUES
(1, 'ABCD alphebet sound machine learning toys', 2030000, 'ELETREE', 'Guangdong, China', 'Children Learning Gift', 'https://drive.google.com/open?id=1vhh3imVC4rDf-B-49J_NTpxncrFaIFgt'),
(1, 'The Alchemist', 820000, 'Paulo Coelho', 'Arttoy', 'Every few decades a toy is madeed that changes the lives of its readers forever. This is such a toy ? a magical fable about learning to listen to your heart, read the omens strewn along life?s path and, above, all follow your dreams.', 'The-Alchemist.jpg'),
(1, 'Oxf Advanced AM Dict Pk', 442000, 'Unknown', 'Oxford University Press', 'Oxfords new American Dictionaries for learners of English offer students a dictionary that is just right for their level. Written specifically for students working to improve their English language skills, these dictionaries support English learners, struggling readers, and special education students...', 'Oxf.jpg'),
(2, 'Outcomes Pre-Inter (Asia Ed.): Student toy with Pincode Only', 216000, 'Cengage', 'Cengage', 'Nothing', 'Outcomes.jpg'),
(3, 'Communication Strategies B3: Text', 234000, 'Heinle ELT', 'Heinle ELT', 'Communication Strategies covers the vocabulary, patterns, and collocations that English language learners need to communicate actively.', 'Communication.jpg'),
(3, 'American Inspiration 2: Student toy with CD-Rom', 470000, 'Macmillan Education', 'Macmillan Education', 'Nothing', 'American.jpg'),
(3, '8 Bước Dẫn Đến Thành Công Của Các Nhà Doanh Nghiệp', 24000, 'Hoàng Mai Việt, Minh Đức (Biên soạn)', 'Nxb Văn hóa Thông tin', 'Cuốn sách viết về một vài cá nhân đầu tư như thế nào vào cái ngành vừa đặc thù lại vừa biến động; một ngành vừa là người sản xuất vừa là người tiêu dùng. Nó còn viết về quá trình phát tiển của những ngành như thế này.', '8-buoc.jpg'),
(3, 'Chọn Ngân Hàng Hay Chọn Giám Đốc', 103000, 'Trịnh Minh Thảo ', 'Nxb Tổng hợp TP.HCM', '“Chọn giám đốc hay chọn ngân hàng” không chỉ dành riêng cho banker nói riêng mà dành cho những ai muốn trải nghiệm và thử thách bản thân với nghề ngân hàng. Quyển sách là một “guideline” thiết thực dành cho những bạn trẻ mới ra trường và dấn thân vào công việc mà mình chọn lựa. Cho dù chọn bất kỳ công việc gì, ngành nghề nào thì công thức để bạn thành công chỉ có thể là sự kiên trì, không ngừng học hỏi.', 'chon-ngan-hang.jpg'),
(4, 'Nghĩ Giàu Làm Giàu 365 Ngày (Tái Bản 2019)', 71000, 'Napoleon Hill ', 'Nxb Công Thương', 'Hãy bắt đầu mỗi buổi sáng với nguồn thực phẩm cho suy nghĩ và hành động để nuôi dưỡng cơ thể và tâm hồn bạn, công việc và cả các mối quan hệ của bạn nữa. Như một phương tiện bổ trợ, mỗi tháng trong lịch “có thể – làm” này có chủ đề thống nhất của riêng nó.', 'nghi-lam-giau.jpg'),
(4, 'Chiến Lược Mở Rộng Kinh Doanh Từ Cốt Lõi', 87000, 'Chris Zook', 'Nxb Công Thương', 'Công ty thành công nào cũng có một chiến lược cốt lõi thành công. Nhưng nhu cầu, khả năng và kế hoạch phát triển đòi hỏi những công ty đó phải thực hiện nhiều hơn một chiến lược cốt lõi. Trong cuốn sách Chiến lược mở rộng kinh doanh từ cốt lõi, chiến lược gia Chris Zook đã tiết lộ cách để tăng lợi nhuận bằng việc tập trung và đạt được tiềm năng đầy đủ trong kinh doanh cốt lõi; đồng thời phác thảo một chiến lược mở rộng liên quan chặt chẽ đến công việc kinh doanh cốt lõi.', 'chien-luoc.jpg');
(4, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(5, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(5, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(6, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(6, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(7, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(7, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(7, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(8, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(9, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(10, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'Arttoy', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),

CREATE TABLE kindtoy (
id SERIAL,
kindtoy VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO kindtoy (kindtoy) VALUES
('Education Toys'),
('Construction Toys'),
('Verhicle Toys'),
('Woonden Toys'),
('Sound Toys'),
('Teddy Bear'),
('Dolls'),
('Spinning Toys'),
('Hot Toys'),
('Best Sellers Toys');

CREATE TABLE admin (
id SERIAL,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO admin (username, password) VALUES
('chinhtb', '123456');