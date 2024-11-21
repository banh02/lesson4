<?php
abstract class Employee
{
    protected $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    abstract public function calculateBonus();

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

interface Workable
{
    public function work();
}

class Manager extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.2;
    }

    public function work()
    {
        return "{$this->name} is managing the project.";
    }
}

class Developer extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.1;
    }

    public function work()
    {
        return "{$this->name} is developing the software.";
    }
}

class Designer extends Employee implements Workable
{
    public function calculateBonus()
    {
        return $this->salary * 0.15;
    }

    public function work()
    {
        return "{$this->name} is designing the interface.";
    }
}

$employee = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $salary = floatval($_POST['salary']);
    $role = $_POST['role'];

    switch ($role) {
        case 'Manager':
            $employee = new Manager($name, $salary);
            break;
        case 'Developer':
            $employee = new Developer($name, $salary);
            break;
        case 'Designer':
            $employee = new Designer($name, $salary);
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>
</head>

<body>
    <h1>Nhập Thông Tin Nhân Viên</h1>
    <form method="POST" action="">
        <label for="name">Tên nhân viên:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="salary">Lương cơ bản:</label><br>
        <input type="number" id="salary" name="salary" step="0.01" required><br><br>

        <label for="role">Chức vụ:</label><br>
        <select id="role" name="role" required>
            <option value="Manager">Manager</option>
            <option value="Developer">Developer</option>
            <option value="Designer">Designer</option>
        </select><br><br>

        <button type="submit">Xác nhận</button>
    </form>

    <?php if ($employee): ?>
        <h2>Thông Tin Nhân Viên</h2>
        <p><strong>Tên:</strong> <?php echo $employee->getName(); ?></p>
        <p><strong>Lương:</strong> $<?php echo number_format($employee->getSalary(), 2); ?></p>
        <p><strong>Thưởng:</strong> $<?php echo number_format($employee->calculateBonus(), 2); ?></p>
        <p><strong>Công việc:</strong> <?php echo $employee->work(); ?></p>
    <?php endif; ?>
</body>

</html>