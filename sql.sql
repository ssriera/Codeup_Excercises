-- //Find all current employees, their dept name, and their current manager
SELECT concat(e.first_name, ' ', e.last_name), d.dept_name AS full_name, d.dept_name, concat(m.first_name, ' ', m.last_name)
FROM employees AS e
JOIN dept_emp AS de
ON e.emp_no = de.emp_no
JOIN departments AS d
ON de.dept_no = d.dept_no
JOIN dept_manager AS dm
ON d.dept_no = dm.dept_no
JOIN employees AS m ON dm.emp_no = m.emp_no
WHERE de.to_date > now() AND dm.to_date > now();



-- //Find all managers and their current salary
select e.first_name, e.last_name
from employees as e
right join dept_manager as dm on e.emp_no = dm.emp_no
left join salaries as s on e.emp_no = s.emp_no
where dm.to_date > now() and s.to_date > now();


-- //Find all employees, their dept name, and their title
select e.first_name, e.last_name, d.dept_name, t.title
from employees as e
join title as t
on e.emp_no = t.emp_no
join dept_emp as de
on t.emp_no = de.emp_no
join departments as d
on de.dept_no = d.dept_no;

-- //Find all UNIQUE combinations of title and depts
select distinct title, dept_name
from titles as t
join dept_emp as de on t.emp_no = de.emp_no
join departments as d on de.dept_no = d.demp_no
//Same thing but different path
select title, dept_name
from dept_emp as de
join titles as t on de.emp_no = t.emp_no
join departments as d on de.dept_no = de.dept_no
group by title, dept_name;

//Highest salary during their employment
select e.emp_no, first_name, last_name, max(s.salary)
from employees as e
join salaries as s on e.emp_no = s.emp_no
group by e.emp_no, first_name, last_name;


~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

EXCERCISES 8.9.3

SELECT * 
FROM employees
WHERE hire_date IN (
	SELECT hire_date FROM employees
	WHERE 101010
);

SELECT * FROM titles
WHERE emp_no IN (
	SELECT emp_no FROM employees WHERE first_name = 'Aamod'
);

SELECT * FROM employees WHERE emp_no IN (
	SELECT emp_no FROM dept_manager
) AND gender = 'F';

-- //Bonus - Correct one
SELECT dept_name FROM departments WHERE dept_no IN (
	SELECT dept_no FROM dept_manager WHERE emp_no IN (
		SELECT emp_no FROM employees WHERE gender = 'f');

-- // Not correct
SELECT d.dept_name
FROM departments AS d
JOIN dept_manager AS dm
ON d.dept_num = dm.dept_num
JOIN employees AS e
ON dm.emp_no = e.emp_no
WHERE (
	SELECT e.gender ='F'
);




