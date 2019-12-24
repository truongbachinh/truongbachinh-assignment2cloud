
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
(1, 'ABCD alphebet sound machine learning toys', 2030000, 'ELETREE', 'Guangdong, China', 'Children Learning Gift.', 'educationToy1.jpg'),
(1, 'Magnetic Alphabet', 820000, 'Rongou', 'Zhejiang, China', 'Color card OPP bag carton.', 'educationToy2.jpg'),
(1, 'Oxf Advanced Alphabet', 442000, 'Innosma', 'Guangdong, China', 'Talking Pen with Cards Education Toy.', 'educationToy3.jpg'),
(2, 'Constructor Toys Christmas Gift ', 216000, 'Artmag', 'Zhejiang, China', 'Safety,Durable, high transparency.', 'constructionToy1.png'),
(3, 'Thunderbolt police set of armored car toy', 234000, 'LY', 'Guangdong, China', 'Building Blocks Toys.', 'vehicleToy1.jpg'),
(3, '4-channel CAR remote Control RC', 470000, 'LY', 'Guangdong, China', 'Car six-wheeled Simulation good quality American Environmental Standards.', 'vehicleToy2.jpg'),
(3, 'RC remote control aircraft model plastic toy', 240000, 'LY', 'Guangdong, China', 'Remote Control aircraft. From raw material sourcing - Injection - Semifinished Products - finished products,our professional QC Team control our products quality step by step.our professional testing lab insure our products meet intemational toys safety standards.', 'vehicleToy3.jpg'),
(3, 'Control Motorcycle red six-wheeled Simulation RC CAR', 103000, 'LY', 'Guangdong, China', 'Window Box.', 'vehicleToy4.jpg'),
(4, 'Baby Teether Teether Unique Design Educational Baby Wood', 71000, 'Wo Silicone', 'Guangdong, China', 'Carboard boxCustom Logo Natural Beech Wood baby car Toys Teether.', 'woodenToy1.jpg'),
(4, 'Wooden Simulation Toolkit Kids DIY', 87000, 'MF', 'Zhejiang, China', 'Kid Building Block Toys.', 'woodenToy2.jpg');
(4, 'ROKR Stem Toys Wooden 3D Mechanical Gears Driven Puzzle ', 2030000, 'Robotime', 'Jiangsu, China', 'Pendulum Clock.', 'woodenToy3.jpg'),
(5, 'Top sale new design voice changer speaker toy can makes boy,girl and robot sound ', 2030000, 'Shin Y', 'Guangdong, China', 'Speaker toys.', 'soundToy1.jpg'),
(5, 'Instrument Kid Keyboard Sound Module Child Book Mini Musical Piano Music Toy ', 2030000, 'Shing Yip', 'China', 'Kids music instrument toy piano keyboard for sale.', 'soundToy2.jpg'),
(6, 'Custom Stuffed Animal Cute Plush Teddy Bear in a Jacket', 2030000, 'Linkbrand', 'Guangdong, China', 'Brown or ivory.', 'beer1.jpg'),
(6, 'China manufacturer wholesale stock cute small giveaways plush teddy bear', 2030000, 'XILE', 'Guangdong, China', 'Plush Teddy Bear Toys.', 'beer2.jpg'),
(7, 'Real Baby Dolls Girls Christmas Birthday Gifts PVC Plastic Toys Dressing Up Barbies Dolls', 2030000, 'guaiguaibabi', 'China', 'Cartoon Toy, DIY Toy, Educational Toy, Model Toy, Soft Toy.', 'doll1.jpg'),
(7, 'Wholesale New Arrival hot sell Smiling face spring doll for Spring Head Doll', 2030000, 'BC', 'Zhejiang, China', 'Fashional.', 'doll2.jpg'),
(7, 'Yinuo High Quality Cute and Funny Monster Cartoon Baby Doll ', 2030000, 'Yinuo', 'Zhejiang, China', 'Cute Baby Doll.', 'doll3.jpg'),
(8, 'Custom PP spinning top toy funny classical spinning toy ', 2030000, 'PP', 'Hunan, China', 'Can use our design or OEM.', 'spinningToy1.jpg'),
(9, 'HOT funny desktop games set Godzilla Dinosaur Dentist Biting Finger Toy', 2030000, 'Win-Win/ OEM', 'China', 'Color Box.', 'hotToy1.jpg'),
(10, 'Selling Toys 3D Small Diy Dinosaur Model Puzzle in Egg for Kids ', 2030000, 'Ukenn', 'China', 'Wholesale,Trial,OEM & ODM orders available.', 'bestSeller1.jpg'),

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