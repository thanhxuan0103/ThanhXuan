<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use PhpOffice\PhpWord\Element\Row;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Đăng nhập
Route::get('/',[MyLogin::class,'ShowLogin']);
Route::get('/login',[MyLogin::class,'ShowLogin']);
Route::post('/ValidateLogin',[MyLogin::class,'ValidateLogin'])->name('ValidateLogin');

Route::get('/dashboard',[MyLogin::class,'dashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout',[MyLogin::class,'logoutUser'])->name('logoutUser');

// Quản lý người dùng
Route::group(['prefix'=>'user','middleware'=>'isLoggedIn'],function(){
    Route::get('/UserList', [UserController::class, 'UserList'])->name('UserList');
    Route::get('/AddNewUser', function(){
        return view('user.AddNewUser');
    });
    Route::get('/AddUser', [UserController::class, 'AddUser']);
    Route::get('/AddUserToProject', function(){
        return view('user.AddUserToProject');
    });
    Route::get('/UserGroupList', [UserGroupController::class, 'showUserGroupList']);
    Route::get('/AddUserGroup', [UserGroupController::class,'showAddUserGroup']);
    Route::post('/StoreUserGroup',[UserGroupController::class, 'StoreUserGroup']);
    Route::post('/StoreUser',[UserController::class, 'store'])->name('AddUser');
    Route::get('/UserProfile', [UserController::class, 'showUserProfile'])->name('UserProfile');
    Route::get('/EditProfile',[UserController::class,'showEditProfile'])->name('EditProfile');
    Route::post('/UpdateProfile',[UserController::class, 'updateProfile'])->name('UpdateProfile');
    Route::post('/ChangePassword', [UserController::class, 'changePassword'])->name('ChangePassword');
    Route::get('/UpdateUser/{idUser}',[UserController::class, 'updateUser'])->name('UpdateUser');
    Route::post('/storeUpdateUser',[UserController::class, 'storeUpdateUser'])->name('storeUpdateUser');
    Route::get('/ResetUserPassword/{idUser}',[UserController::class, 'resetUserPassword'])->name('ResetUserPassword');
});

// Quản lý thông tin khách hàng
Route::group(['prefix'=>'customer','middleware'=>'isLoggedIn'],function(){
    Route::get('/AddCustomerReq',[CustomerController::class,'showAddCustomerReq'])->name('AddCustomerReq');
    Route::get('/EditCustomerReq',[CustomerController::class,'showEditCustomerReq'])->name('EditCustomerReq');
    Route::get('/ListCustomerReq',[CustomerController::class,'showListCustomerReq'])->name('ListCustomerReq');
    Route::get('/AddCustomerInfo',[CustomerController::class,'showAddCustomerInfo'])->name('AddCustomerInfo');
    Route::get('/EditCustomerInfo',[CustomerController::class,'showEditCustomerInfo'])->name('EditCustomerInfo');
    Route::get('/ListCustomerInfo',[CustomerController::class,'showListCustomerInfo'])->name('ListCustomerInfo');
    Route::post('/StoreCustomerInfo',[CustomerController::class,'StoreCustomerInfo'])->name('StoreCustomerInfo');
    Route::post('/StoreCustomerReq',[CustomerController::class,'StoreCustomerReq'])->name('StoreCustomerReq');
    Route::get('/CreateContract/{idRequirement}',[CustomerController::class,'CreateContract'])->name('CreateContract');
    Route::get('/getFileReq/{idReq}',[FileController::class,'getFileReq'])->name('getFileReq');
    Route::get('/downloadFileReq/{idFile}',[FileController::class,'downloadFileReq'])->name('downloadFileReq');
});

// Quản lý hợp đồng
Route::group(['prefix'=>'contract','middleware'=>'isLoggedIn'],function(){
    Route::get('/AddContract',[ContractController::class,'showAddContract'])->name('AddContract');
    Route::get('/EditContract',[ContractController::class,'showEditContract'])->name('EditContract');
    Route::get('/ListContract',[ContractController::class,'showListContract'])->name('ListContract');
    Route::post('/GetEmplByType',[ContractController::class,'GetEmplByType'])->name('GetEmplByType');
    Route::get('/GetEmplById_Contract/{idUser}/{idContract}',[ContractController::class,'GetEmplById_Contract'])->name('GetEmplById_Contract');
    Route::get('/GetDeveloper/{idContract}',[ContractController::class,'GetDeveloper'])->name('GetDeveloper');
    Route::get('/AddDeveloper/{idUser}',[ContractController::class,'AddDeveloper'])->name('AddDeveloper');
    Route::get('/GetUserParticipate/{idContract}',[ContractController::class,'GetUserParticipate'])->name('GetUserParticipate');
    Route::get('/GetEmplById/{idUser}',[ContractController::class,'GetEmplById'])->name('GetEmplById');
    Route::post('/AddDirectManagerToProject',[ContractController::class,'AddDirectManagerToProject'])->name('AddDirectManagerToProject');
    Route::post('/AddIndirectManagerToProject',[ContractController::class,'AddIndirectManagerToProject'])->name('AddIndirectManagerToProject');
    Route::post('/AddDeveloperToProject',[ContractController::class,'AddDeveloperToProject'])->name('AddDeveloperToProject');
    Route::post('/GetContractInfo',[ContractController::class,'GetContractInfo'])->name('GetContractInfo');
});

// Quản lý xây dựng phần mềm
Route::group(['prefix'=>'softwarebuild','middleware'=>'isLoggedIn'],function(){
    Route::get('/AddSoftwareBuild',[SoftwareBuildController::class,'showAddSoftwareBuild'])->name('AddSoftwareBuild');
    Route::get('/AddTask',[SoftwareBuildController::class,'showAddTask'])->name('AddTask')->name('AddTask');
    Route::get('/EditTask',[SoftwareBuildController::class,'showEditTask'])->name('EditTask')->name('EditTask');
    Route::get('/ListSoftwareBuild',[SoftwareBuildController::class,'showListSoftwareBuild'])->name('ListSoftwareBuild');
    Route::get('/ListTask',[SoftwareBuildController::class,'showListTask'])->name('ListTask');
    Route::get('/SoftwareBuildDetails/{idContract}',[SoftwareBuildController::class,'showSoftwareBuildDetails'])->name('ShowSoftwareBuildDetails');
    Route::post('/GetDevOfContract',[SoftwareBuildController::class,'GetDevOfContract'])->name('GetDevOfContract');
    Route::post('/storeTaskInfo',[SoftwareBuildController::class,'storeTaskInfo'])->name('storeTaskInfo');
    Route::post('/SoftwareBuildDetails/GetChartData',[SoftwareBuildController::class,'GetChartData'])->name('GetChartData');
});

// Quản lý nghiệm thu
Route::group(['prefix'=>'acceptance','middleware'=>'isLoggedIn'],function(){
    Route::get('/AddAcceptanceDetail',[AcceptanceController::class,'showAddAcceptanceDetail'])->name('AddAcceptanceDetail');
    Route::get('/EditAcceptance',[AcceptanceController::class,'showEditAcceptance'])->name('EditAcceptance');
    Route::get('/ListAcceptance',[AcceptanceController::class,'showListAcceptance'])->name('ListAcceptance');
    Route::post('/UploadAccptDocs',[AcceptanceController::class,'UploadAccptDocs'])->name('UploadAccptDocs');
});
// Quản lý files
Route::group(['prefix'=>'files','middleware'=>'isLoggedIn'],function(){
    Route::get('/CreateContractWordFile/{id}',[FileController::class,'CreateContractWordFile'])->name('CreateContractWordFile');
    Route::post('/StoreFile',[FileController::class,'StoreFile'])->name('StoreFile');
    Route::get('/ListFile',[FileController::class,'showListFile'])->name('ListFile');

});




