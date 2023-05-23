-- По одному сотруднику из каждого отдела с максимальной зарплатой
SELECT id, name, MAX(salary), department FROM Employee
GROUP BY department;

-- Все такие сотрудники (с учетом равенства максимума)
SELECT * FROM Employee WHERE (salary, department) IN 
(SELECT MAX(salary) AS maxS, department AS dep FROM Employee
GROUP BY department);