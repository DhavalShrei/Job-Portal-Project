create table user(
user_iden varchar (10) primary key,
user_name varchar (25), 
user_pass varchar (20),
user_email varchar (30),
user_age integer,
user_phn integer,
user_location varchar (20));

create table company(
company_id varchar (10) primary key,
company_name varchar(20),
company_desc varchar (45),
est_date varchar(20),
website_url varchar (45));

create table job(
job_id varchar (10) primary key,
job_title varchar (20),
job_description varchar (45),
job_location varchar (20),
salary varchar integer,
skills_required varchar (25),
company_id varchar(10),
foreign key (company_id) references company (company_id));

create table job_applied(
user_iden varchar (10),
job_id varchar (10),
app_type varchar (10),
primary key(user_iden,job_id),
foreign key (user_iden) references user (user_iden),
foreign key (job_id) references job (job_id));

create table resume(
resume_id varchar(10),
user_iden varchar (10),
college varchar (45),
degree varchar (10),
skill1 varchar (20),
skill2 varchar (20),
10th_cgpa decimal (3,2),
12th_cgpa decimal (3,2),
foreign key (user_id) references user (user_id));