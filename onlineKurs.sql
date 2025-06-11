CREATE DATABASE IF NOT EXISTS courses_db CHARACTER SET utf8 COLLATE utf8_general_ci;
USE courses_db;

-- Eski tablolar varsa sil
DROP TABLE IF EXISTS user_courses;
DROP TABLE IF EXISTS courses;
DROP TABLE IF EXISTS users;

-- Kullanıcı tablosu
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(100),
  last_name VARCHAR(100),
  email VARCHAR(150),
  password VARCHAR(255),
  gender VARCHAR(10) DEFAULT NULL,
  birth_place VARCHAR(100) DEFAULT NULL,
  birth_date DATE DEFAULT NULL
);

-- Kurs tablosu
CREATE TABLE courses (
  id INT AUTO_INCREMENT PRIMARY KEY,
  course_name VARCHAR(100) NOT NULL,
  instructor VARCHAR(100) NOT NULL,
  description TEXT,
  difficulty VARCHAR(20),
  duration_hours INT,
  image_url VARCHAR(255)
);

-- Kullanıcının kurs kayıtları tablosu
CREATE TABLE user_courses (
  user_id INT,
  course_id INT,
  enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (user_id, course_id),
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
  FOREIGN KEY (course_id) REFERENCES courses(id) ON DELETE CASCADE
);

INSERT INTO users (first_name, last_name, email, password, gender, birth_place, birth_date) VALUES
('Ahmet', 'Yilmaz', 'ahmet@example.com', SHA2('Ahmet123!', 256), 'Erkek', 'İstanbul', '1995-03-12'),
('Zeynep', 'Arslan', 'zeynep@example.com', SHA2('Zeynep456!', 256), 'Kadın', 'Ankara', '1997-08-22'),
('Mehmet', 'Kaya', 'mehmet@example.com', SHA2('Mehmet789!', 256), 'Erkek', 'İzmir', '1992-11-03'),
('Ayse', 'Demir', 'ayse@example.com', SHA2('Ayse1011!', 256), 'Kadın', 'Bursa', '1996-02-15'),
('Fatma', 'Celik', 'fatma@example.com', SHA2('Fatma1213!', 256), 'Kadın', 'Adana', '1993-07-09'),
('Mustafa', 'Akkaya', 'mustafa@example.com', SHA2('Mustafa1415!', 256), 'Erkek', 'Konya', '1991-05-30'),
('Emine', 'Yildiz', 'emine@example.com', SHA2('Emine1617!', 256), 'Kadın', 'Antalya', '1998-12-19'),
('Ali', 'Cetin', 'ali@example.com', SHA2('Ali1819!', 256), 'Erkek', 'Samsun', '1990-01-10'),
('Sevim', 'Ozturk', 'sevim@example.com', SHA2('Sevim2021!', 256), 'Kadın', 'Trabzon', '1994-09-25'),
('Gizem', 'Karahan', 'gizem@example.com', SHA2('Gizem2223!', 256), 'Kadın', 'Eskişehir', '1999-04-05'),
('Berk', 'Can', 'berk@example.com', SHA2('Berk2425!', 256), 'Erkek', 'Mersin', '1995-06-18'),
('Selin', 'Akyol', 'selin@example.com', SHA2('Selin2627!', 256), 'Kadın', 'Kayseri', '1997-10-30'),
('Onur', 'Tekin', 'onur@example.com', SHA2('Onur2829!', 256), 'Erkek', 'Gaziantep', '1992-02-07'),
('Nihan', 'Ates', 'nihan@example.com', SHA2('Nihan3031!', 256), 'Kadın', 'Malatya', '1996-12-02'),
('Cem', 'Akyuz', 'cem@example.com', SHA2('Cem3233!', 256), 'Erkek', 'Kocaeli', '1993-03-27');
-- Örnek kurslar
INSERT INTO courses (course_name, instructor, description, difficulty, duration_hours, image_url) VALUES
('Web Geliştirme 101', 'Murat Yıldız', 'HTML5, CSS3 ve JavaScript ile modern web siteleri oluşturun', 'Başlangıç', 8, 'img/web_development.jpg'),
('Python ile Veri Bilimi', 'Zeynep Çetin', 'Pandas, NumPy ve Matplotlib kütüphanelerini öğrenin', 'Orta', 12, 'img/python_veribilimi.jpg'),
('Mobil Uygulama Geliştirme', 'Ali Demir', 'React Native ile cross-platform uygulamalar yapın', 'İleri', 15, 'img/mobile_developer.jpeg');

-- Kullanıcıların kurs kayıtları
INSERT INTO user_courses (user_id, course_id, enrollment_date) VALUES
(1, 1, '2024-11-01 10:00:00'),
(1, 2, '2024-11-05 14:30:00'),
(2, 1, '2024-11-03 09:15:00'),
(3, 3, '2024-11-07 12:00:00'),
(4, 2, '2024-11-10 11:45:00'),
(5, 1, '2024-11-11 16:20:00');



