DROP TABLE IF EXISTS toy, kindtoy, admin;


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
(1, 'ABCD alphebet extend machine learning toys', 2030000, 'ELETREE', 'Guangdong, China', 'Children Learning Gift.', 'https://drive.google.com/file/d/1vhh3imVC4rDf-B-49J_NTpxncrFaIFgt/view?usp=sharing'),
(1, 'Magnetic Alphabet toy for study', 820000, 'Rongou', 'Zhejiang, China', 'Color card OPP bag carton.', 'https://drive.google.com/open?id=1XX6oxCweCXb4SB-KCvjLfLrl-52VRX-b'),
(1, 'Oxf Advanced Alphabet learning toy', 442000, 'Innosma', 'Guangdong, China', 'Talking Pen with Cards Education Toy.', 'https://drive.google.com/open?id=1Fa-8cuO15MCRbbaPsJx3hBNpfZ2Ved0R'),
(2, 'Constructor Toys Christmas Gift for building ', 216000, 'Artmag', 'Zhejiang, China', 'Safety,Durable, high transparency.', 'https://drive.google.com/open?id=1DhC9CRG-Jdo9T5f_0WuMPG0JBRCDEzKp'),
(3, 'Thunderbolt police set of armored car toy', 234000, 'LY', 'Guangdong, China', 'Building Blocks Toys.', 'https://drive.google.com/open?id=17aovd-U2LhX8iTmH56fyVXs6RKhfNFma'),
(3, '4-channel CAR remote Control RC car toy', 470000, 'LY', 'Guangdong, China', 'Car six-wheeled Simulation good quality American Environmental Standards.', 'https://drive.google.com/open?id=1iaV3iHOGnhzCJmbGQlyQJ6guoPnpKjQ8'),
(3, 'RC remote control aircraft model plastic toy', 240000, 'LY', 'Guangdong, China', 'Remote Control aircraft. From raw material sourcing - Injection - Semifinished Products - finished products,our professional QC Team control our products quality step by step.our professional testing lab insure our products meet intemational toys safety standards.', 'https://drive.google.com/open?id=1aYpZnHFiUhtFSWPMRjqHQXrUF7ll6jWN'),
(3, 'Control Motorcycle red six-wheeled Simulation RC CAR', 103000, 'LY', 'Guangdong, China', 'Window Box.', 'https://drive.google.com/open?id=1U33bGJHkcHW0YOiDDKjJK0VGDMsEL0RW'),
(4, 'Baby Teether Teether Unique Design Educational Baby Wood', 71000, 'Wo Silicone', 'Guangdong, China', 'Carboard boxCustom Logo Natural Beech Wood baby car Toys Teether.', 'https://drive.google.com/open?id=1LcHHNmOCP7weIcdbET4EeqaANiE-KKrB'),
(4, 'Wooden Simulation Toolkit Kids DIY happy house', 87000, 'MF', 'Zhejiang, China', 'Kid Building Block Toys.', 'https://drive.google.com/open?id=1XGO03EpHAS3G8MbxuAODlhrGSlN35RbR'),
(4, 'ROKR Stem Toys Wooden 3D Mechanical Gears Driven Puzzle ', 2030000, 'Robotime', 'Jiangsu, China', 'Pendulum Clock.', 'https://drive.google.com/open?id=1ruXc3T2cRxVKA_ADmuP2Sp9z-Tpt8poK'),
(5, 'Top voice changer speaker toy can makes boy,girl and robot sound ', 2030000, 'Shin Y', 'Guangdong, China', 'Speaker toys.', 'https://drive.google.com/open?id=19xseP5op2T7J7KWVAPCuW74zpM8GWHUn'),
(5, 'Instrument Kid Keyboard Sound Module Child Book Mini Musical Piano Music Toy ', 2030000, 'Shing Yip', 'China', 'Kids music instrument toy piano keyboard for sale.', 'https://drive.google.com/open?id=19xseP5op2T7J7KWVAPCuW74zpM8GWHUn'),
(6, 'Custom Stuffed Animal Cute Plush Teddy Bear in a Jacket', 2030000, 'Linkbrand', 'Guangdong, China', 'Brown or ivory.', 'https://drive.google.com/open?id=1UhBOzqqQKKJzjyNS359KCh13KdNSgfJD'),
(6, 'China manufacturer wholesale stock cute  teddy bear', 2030000, 'XILE', 'Guangdong, China', 'Plush Teddy Bear Toys.', 'https://drive.google.com/open?id=1ZdTg_7nRXe4zJ9M47Aq3prl_jQSG5DlO'),
(7, 'Real Baby Dolls Girls Christmas Birthday Gifts PVC ', 2030000, 'guaiguaibabi', 'China', 'Cartoon Toy, DIY Toy, Educational Toy, Model Toy, Soft Toy.', 'https://drive.google.com/open?id=19F6tb7yCwWItYBvIPVq0-03ny5DcXYFE'),
(7, 'Wholesale  hot sell Smiling face spring doll for Spring Head Doll', 2030000, 'BC', 'Zhejiang, China', 'Fashional.', 'https://drive.google.com/open?id=1C7mly-PuRH6YySd1EgmMgS06hNLTvrpn'),
(7, 'Yinuo High Quality Cute and Funny Monster Cartoon Baby Doll ', 2030000, 'Yinuo', 'Zhejiang, China', 'Cute Baby Doll.', 'https://drive.google.com/open?id=1XYKv1c2Dq0JUIxcVWZWzzyyPMgZtLiO3'),
(8, 'Custom PP spinning top toy funny classical spinning toy ', 2030000, 'PP', 'Hunan, China', 'Can use our design or OEM.', 'https://drive.google.com/open?id=1kDxF6DvTvVRGgMcwYo8rQLseCVsKwmQ7'),
(9, 'HOT funny desktop games set Dentist Biting Finger Toy', 2030000, 'Win-Win/ OEM', 'China', 'Color Box.', 'https://drive.google.com/open?id=1VLcjB07d2cMT8dLUSfcYxydgJAeBo02l'),
(10, 'Selling Toys 3D Small Diy Dinosaur Model Puzzle in Egg for Kids ', 2030000, 'Ukenn', 'China', 'Wholesale,Trial,OEM & ODM orders available.', 'https://drive.google.com/open?id=1kKNDXcAi1z6iTqPFTZpzyy6B8Ik3PYHN');

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