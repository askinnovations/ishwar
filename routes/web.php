<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    EmployeeController, PayrollController, Auth\LoginController, AdminDashboardController,
    UserController, TyreController, WarehouseController,OrderController,
    ConsignmentNoteController, FreightBillController, StockTransferController, DriverController,
    AttendanceController, MaintenanceController, VehicleController,TaskManagmentController
};

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    // Authentication Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [LoginController::class, 'login'])->name('admin.login.submit');
    Route::get('/logout', [LoginController::class, 'logout'])->name('admin.logout');

    // Dashboard Route
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // User Management
    Route::prefix('users')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('admin.users.index');
        Route::get('/create', [UserController::class, 'create'])->name('admin.users.create');
        Route::post('/store', [UserController::class, 'store'])->name('admin.users.store');
        Route::get('/view/{id}', [UserController::class, 'show'])->name('admin.users.view');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/update/{id}', [UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('admin.users.delete');
    });

    // Vehicles Management
    Route::prefix('vehicles')->group(function () {
        Route::get('/', [VehicleController::class, 'index'])->name('admin.vehicles.index');
        Route::get('/create', [VehicleController::class, 'create'])->name('admin.vehicles.create');
        Route::post('/store', [VehicleController::class, 'store'])->name('admin.vehicles.store');
        Route::get('/view/{id}', [VehicleController::class, 'show'])->name('admin.vehicles.view');
        Route::get('/edit/{id}', [VehicleController::class, 'edit'])->name('admin.vehicles.edit');
        Route::post('/update/{id}', [VehicleController::class, 'update'])->name('admin.vehicles.update');
        Route::delete('/delete/{id}', [VehicleController::class, 'destroy'])->name('admin.vehicles.delete');
    });

   // orders Management
    Route::prefix('orders')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name(name: 'admin.orders.index'); 
        Route::get('/create', [OrderController::class, 'create'])->name('admin.orders.create');
        Route::post('/store', [OrderController::class, 'store'])->name('admin.orders.store'); 
        Route::get('/view/{id}', [OrderController::class, 'orders'])->name('admin.orders.view');  
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('admin.orders.update'); 
        Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('admin.orders.delete'); 
    });
    


    // Tyres Management
    Route::prefix('tyres')->group(function () {
        Route::get('/', [TyreController::class, 'index'])->name('admin.tyres.index');
        Route::post('/store', [TyreController::class, 'store'])->name('admin.tyres.store');
        Route::put('/update/{id}', [TyreController::class, 'update'])->name('admin.tyres.update');
        Route::get('/delete/{id}', [TyreController::class, 'destroy'])->name('admin.tyres.delete');
       
    });

    // Warehouse Management
    Route::prefix('warehouse')->group(function () {
        Route::get('/', [WarehouseController::class, 'index'])->name('admin.warehouse.index');
        Route::post('/store', [WarehouseController::class, 'store'])->name('admin.warehouse.store');
        Route::put('/update/{id}', [WarehouseController::class, 'update'])->name('admin.warehouse.update');
        Route::delete('/delete/{id}', [WarehouseController::class, 'destroy'])->name('admin.warehouse.delete');
    });
        //maintenanceController
    Route::prefix('maintenance')->group(function () {
        Route::get('/', [MaintenanceController::class, 'index'])->name('admin.maintenance.index');
        Route::post('/store', [MaintenanceController::class, 'store'])->name('admin.maintenance.store');
        Route::put('/update/{id}', [MaintenanceController::class, 'update'])->name('admin.maintenance.update');
        Route::get('/delete/{id}', [MaintenanceController::class, 'destroy'])->name('admin.maintenance.delete');
    });
      
   
 Route::prefix('employees')->group( function(){
    Route::get('/', [EmployeeController::class, 'index'])->name('admin.employees.index');
    Route::get('/create', [EmployeeController::class, 'create'])->name('admin.employees.create');
    Route::post('/store', [EmployeeController::class, 'store'])->name('admin.employees.store');
    Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('admin.employees.edit');
    Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('admin.employees.show');
    Route::get('/task/{id}', [EmployeeController::class, 'task'])->name('admin.employees.task');
    Route::post('/update/{id}', [EmployeeController::class, 'update'])->name('admin.employees.update');
    Route::get('/delete/{id}', [EmployeeController::class, 'destroy'])->name('admin.employees.delete');
  });
    Route::prefix('drivers')->group( function(){
    Route::get('', [DriverController::class, 'index'])->name('admin.drivers.index');
    Route::get('/create', action: [DriverController::class, 'create'])->name('admin.drivers.create');
    Route::post('/store', [DriverController::class, 'store'])->name('admin.drivers.store');
    Route::get('/edit/{id}', [DriverController::class, 'edit'])->name('admin.drivers.edit');
    Route::get('/show/{id}', [DriverController::class, 'show'])->name('admin.drivers.show');
    Route::post('/update/{id}', [DriverController::class, 'update'])->name('admin.drivers.update');
    Route::get('/delete/{id}', [DriverController::class, 'destroy'])->name('admin.drivers.delete');
    });
// attendance
Route::prefix('attendance')->group( function(){
    Route::get('/', [AttendanceController::class, 'index'])->name('admin.attendance.index');
    Route::post('/update', [AttendanceController::class, 'update'])->name('admin.attendance.update');
   });

   Route::prefix('payroll')->group( function(){
   Route::get('/', [PayrollController::class, 'index'])->name('admin.payroll.index');
   Route::get('/show/{id}', [PayrollController::class, 'show'])->name('admin.payroll.show');
   });

     Route::prefix('task-managment')->group(function(){
     Route::get('/', [TaskManagmentController::class, 'index'])->name('admin.task_management.index');
     Route::post('/store', [TaskManagmentController::class, 'store'])->name('admin.task_management.store');
     Route::put('/update/{id}', [TaskManagmentController::class, 'update'])->name('admin.task_management.update');
     Route::get('/delete/{id}', [TaskManagmentController::class, 'destroy'])->name('admin.task_management.delete');
     Route::get('/search-by-date', [TaskManagmentController::class, 'searchByDate'])->name('admin.task_management.searchByDate');
     Route::get('/close-task/{id}', [TaskManagmentController::class, 'closeTask'])->name('admin.task_management.task_status');

   });
      
    Route::get('/stock-transfer/index', [StockTransferController::class, 'index'])->name('admin.stock.index');

   
    
    


    
});
