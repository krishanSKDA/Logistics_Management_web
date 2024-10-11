<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmployeeTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_employee()
    {
        $employee = Employee::create([
            'first_name' => 'Krishan',
            'last_name' => 'Danushka',
            'email' => 'danushka@gmail.com',
            'phone' => '1234567890',
            'position' => 'Developer',
            'gender' => 'Male',
            'hire_date' => '2024-01-01',
        ]);

        $this->assertDatabaseHas('employees', [
            'email' => 'danushka@gmail.com',
            'first_name' => 'Krishan',
            'last_name' => 'Danushka',
        ]);
    }

    public function test_employee_has_correct_casts()
    {
        $employee = new Employee([
            'hire_date' => '2024-01-01',
        ]);

        $this->assertInstanceOf(\Carbon\Carbon::class, $employee->hire_date);
        $this->assertEquals('2024-01-01', $employee->hire_date->toDateString());
    }

    public function test_fillable_attributes()
    {
        $fillable = (new Employee())->getFillable();

        $this->assertEquals([
            'first_name',
            'last_name',
            'email',
            'phone',
            'position',
            'gender',
            'hire_date',
        ], $fillable);
    }

    public function test_employee_requires_valid_data()
    {
        $this->expectException(\Illuminate\Database\QueryException::class);

        Employee::create([
           
        ]);
    }
}
