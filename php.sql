
CREATE TABLE book (
id SERIAL,
id_kindbook INT NOT NULL,
bookname VARCHAR(255) NOT NULL,
price INT NOT NULL,
author VARCHAR(255) NOT NULL,
publish VARCHAR(255) NOT NULL,
bookdescription VARCHAR(510) NOT NULL,
img VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO book (id_kindbook, bookname, price, author, publish, bookdescription, img) VALUES
(1, 'Harry Potter Box Set: The Complete Collection', 2030000, 'J. K. Rowling', 'ArtBook', 'A beautiful boxed set containing all seven Harry Potter novels in paperback. These new editions of the classic and internationally bestselling, multi-award-winning series feature instantly pick-up-able new jackets by Jonny Duddle, with huge child appeal, to bring Harry Potter to the next generation of readers.', 'Harry-Potter-Box-Set.jpg'),
(1, 'The Alchemist', 820000, 'Paulo Coelho', 'ArtBook', 'Every few decades a book is published that changes the lives of its readers forever. This is such a book ? a magical fable about learning to listen to your heart, read the omens strewn along life?s path and, above, all follow your dreams.', 'The-Alchemist.jpg'),
(1, 'Oxf Advanced AM Dict Pk', 442000, 'Unknown', 'Oxford University Press', 'Oxfords new American Dictionaries for learners of English offer students a dictionary that is just right for their level. Written specifically for students working to improve their English language skills, these dictionaries support English learners, struggling readers, and special education students...', 'Oxf.jpg'),
(1, 'Outcomes Pre-Inter (Asia Ed.): Student book with Pincode Only', 216000, 'Cengage', 'Cengage', 'Nothing', 'Outcomes.jpg'),
(1, 'Communication Strategies B3: Text', 234000, 'Heinle ELT', 'Heinle ELT', 'Communication Strategies covers the vocabulary, patterns, and collocations that English language learners need to communicate actively.', 'Communication.jpg'),
(1, 'American Inspiration 2: Student Book with CD-Rom', 470000, 'Macmillan Education', 'Macmillan Education', 'Nothing', 'American.jpg'),
(2, '8 Bước Dẫn Đến Thành Công Của Các Nhà Doanh Nghiệp', 24000, 'Hoàng Mai Việt, Minh Đức (Biên soạn)', 'Nxb Văn hóa Thông tin', 'Cuốn sách viết về một vài cá nhân đầu tư như thế nào vào cái ngành vừa đặc thù lại vừa biến động; một ngành vừa là người sản xuất vừa là người tiêu dùng. Nó còn viết về quá trình phát tiển của những ngành như thế này.', '8-buoc.jpg'),
(2, 'Chọn Ngân Hàng Hay Chọn Giám Đốc', 103000, 'Trịnh Minh Thảo ', 'Nxb Tổng hợp TP.HCM', '“Chọn giám đốc hay chọn ngân hàng” không chỉ dành riêng cho banker nói riêng mà dành cho những ai muốn trải nghiệm và thử thách bản thân với nghề ngân hàng. Quyển sách là một “guideline” thiết thực dành cho những bạn trẻ mới ra trường và dấn thân vào công việc mà mình chọn lựa. Cho dù chọn bất kỳ công việc gì, ngành nghề nào thì công thức để bạn thành công chỉ có thể là sự kiên trì, không ngừng học hỏi.', 'chon-ngan-hang.jpg'),
(2, 'Nghĩ Giàu Làm Giàu 365 Ngày (Tái Bản 2019)', 71000, 'Napoleon Hill ', 'Nxb Công Thương', 'Hãy bắt đầu mỗi buổi sáng với nguồn thực phẩm cho suy nghĩ và hành động để nuôi dưỡng cơ thể và tâm hồn bạn, công việc và cả các mối quan hệ của bạn nữa. Như một phương tiện bổ trợ, mỗi tháng trong lịch “có thể – làm” này có chủ đề thống nhất của riêng nó.', 'nghi-lam-giau.jpg'),
(2, 'Chiến Lược Mở Rộng Kinh Doanh Từ Cốt Lõi', 87000, 'Chris Zook', 'Nxb Công Thương', 'Công ty thành công nào cũng có một chiến lược cốt lõi thành công. Nhưng nhu cầu, khả năng và kế hoạch phát triển đòi hỏi những công ty đó phải thực hiện nhiều hơn một chiến lược cốt lõi. Trong cuốn sách Chiến lược mở rộng kinh doanh từ cốt lõi, chiến lược gia Chris Zook đã tiết lộ cách để tăng lợi nhuận bằng việc tập trung và đạt được tiềm năng đầy đủ trong kinh doanh cốt lõi; đồng thời phác thảo một chiến lược mở rộng liên quan chặt chẽ đến công việc kinh doanh cốt lõi.', 'chien-luoc.jpg');

CREATE TABLE kindbook (
id SERIAL,
kindbook VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO kindbook (kindbook) VALUES
('Sách Ngoại Văn'),
('Sách Kinh Tế'),
('Sách Văn Học Trong Nước'),
('Sách Văn Học Nước Ngoài'),
('Sách Thường Thức - Đời Sống'),
('Sách Thiếu Nhi'),
('Sách Phát Triển Bản Thân'),
('Sách Tin Học - Ngoại Ngữ'),
('Sách Chuyên Ngành'),
('Sách Giáo Khoa - Giáo Trình');

CREATE TABLE admin (
id SERIAL,
username VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

INSERT INTO admin (username, password) VALUES
('chinhtb', '123456');