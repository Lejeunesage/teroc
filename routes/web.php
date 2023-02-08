<?php

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

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

Route::get('/', function () {
    return Inertia::render('Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    
    // DASHBOARD
    Route::get('/dashboard', [Controller::class, 'index'])->name('dashboard');


    // SERVICES
    Route::get('/service/index', [ServiceController::class, 'index'])->name('service.index');
    Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
    Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
    Route::get('/service/show', [ServiceController::class, 'show'])->name('service.show');
    Route::get('/service/edit', [ServiceController::class, 'edit'])->name('service.edit');
    Route::patch('/service/update', [ServiceController::class, 'update'])->name('service.update');
    Route::delete('/service/destroy', [ServiceController::class, 'destroy'])->name('service.destroy');
    

    // PORTFOLIO
    Route::get('/portfolio/index', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/create', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/portfolio/store', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/portfolio/{id}', [PortfolioController::class, 'show'])->name('portfolio.show');
    Route::get('/portfolio/{id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::put('/portfolio/update', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::delete('/portfolio/{id}', [PortfolioController::class, 'destroy'])->name('portfolio.destroy');


    // PROFIL
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



/*/**
 
//list//
Route::get('activities', [ActivityController::class, "index"])->name('activities')->middleware('auth');
Route::get('activity/{id}', [ActivityController::class, "show"])->name('user.show')->middleware('auth');
//create//
Route::get('activity', [ActivityController::class, "create"])->name('activity.create')->middleware('auth');
Route::post('activity', [ActivityController::class, "store"])->name('activity.store')->middleware('auth');
//update//
Route::get('activities/{id}', [ActivityController::class, "edit"])->name('activity.edit')->middleware('auth');
Route::put('activity/{id}', [ActivityController::class, "update"])->name('activity.update')->middleware('auth');
//delete//
Route::delete('activity/{id}', [ActivityController::class, "destroy"])->name('activity.destroy')->middleware('auth');
*/


/*


            
        <div class="shadow-sm rounded-lg my-3">
                    <div v-if="$page.props.flash.success" class="font-medium text-white bg-green-600 py-3 px-6">{{
                        $page.props.flash.success
                    }}</div>
                    <div v-if="$page.props.flash.error" class="font-medium text-white bg-red-600 py-3 px-6">{{
                        $page.props.flash.error
                    }}</div>
                </div>
        <Head title="Créer une campagne" />


        <h1>Créer une nouvelle campagne</h1>

        <form @submit.prevent="submit" class="max-w-full pt-6" >

            <div class="flex  justify-center  gap-9">
                <div class="w-full flex flex-col gap-2">
                    <div class="w-md">
                            <InputLabel for="description" value="Description" />

                            <TextInput id="description" type="text" class="mt-1 block w-full" v-model="form.description" required
                                autofocus autocomplete="description" />

                            <InputError class="mt-2" :message="form.errors.description" />
                        </div>

                        <div class="m">
                            <InputLabel for="groupe" value="Groupe" />

                            <TextInput id="groupe" type="text" class="mt-1 block w-full" v-model="form.groupe" required
                                autocomplete="groupe" />

                            <InputError class="mt-2" :message="form.errors.groupe" />
                        </div>

                        <div class="m">
                            <InputLabel for="status" value="Status" />

                            <select autocomplete="status" v-model="form.status" id="status" class=" border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected value="ACTIVED">ACTIVED</option>
                            <option value="PAUSED">PAUSED</option>
                            <option value="CLOSED">CLOSED</option>

                            </select>


                            <InputError class="mt-2" :message="form.errors.status" />
                        </div>



                </div>


            <div class="w-full flex flex-col gap-2">
                    <div class="m">
                        <InputLabel for="destination" value="Destination" />

                        <TextInput id="destination" type="text" class="mt-1 block w-full" v-model="form.destination" required
                            autocomplete="destination" />

                        <InputError class="mt-2" :message="form.errors.destination" />
                    </div>

                    <div class="m">
                        <InputLabel for="options" value="Option" />

                         <select autocomplete="options" v-model="form.options" id="options" class=" border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option  selected  value="option1">Option 1</option>
                            <option  value="option2">Option 2</option>
                            <option  value="option3">Option 3</option>

                         </select>

                        <InputError class="mt-2" :message="form.errors.option" />
                    </div>


            </div>
            </div>

           <div class="flex justify-end">
            <PrimaryButton class="ml-4 my-6 "  :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Enrégistrer
            </PrimaryButton>
           </div>

        </form>





 */