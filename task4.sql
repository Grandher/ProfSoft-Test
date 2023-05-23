SELECT id, name FROM Employee
JOIN Department ON Employee.department = Department.id
WHERE Department.name = 'Research';