<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\VotersController;
use App\Http\Controllers\ConstituencyController;
use App\Http\Controllers\ElectionController;
use App\Http\Controllers\BallotsController;
use App\Http\Controllers\BallotsCandidateController;
use App\Http\Controllers\PoliticalPartiesController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\AdminController;
use App\Models\Election;


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
    return view('welcome');
});

Route::get('/ok', function () {
    dd(session()->flush());
});

Route::get('/ui', [ConstituencyController::class, 'testing']);
Route::post('/testing2', [ConstituencyController::class, 'testing2']);

Route::get('/cr8',function(){
    return view('Constituency.createConstituency');
});
Route::get('/c',function(){
    return view('Constituency.constituency');
});

//Face
Route::get('/face/{name}/{description}', [FaceController::class, 'registerPerson']);
Route::post('/try/{name}', [FaceController::class, 'testing']);
Route::post('/register', [FaceController::class, 'registerPerson']);
Route::post('/addface/{person_id}', [FaceController::class, 'addFace']);
Route::post('/verify/{person_id}', [FaceController::class, 'CheckFace']);

//Voters
Route::get('/create', [VotersController::class, 'create']);
Route::post('/insert', [VotersController::class, 'insert']);
Route::post('/voters/register', [VotersController::class, 'register']);
Route::get('/voters', [VotersController::class, 'index']);
Route::delete('/delete/{voter_id}', [VotersController::class, 'delete']);


//Vote
Route::get('/vote/{hash?}', [VoteController::class, 'index']);
Route::post('/vote/{hash?}/{id}/castvote', [VoteController::class, 'castVote']);
Route::get('/countvote/{id}', [VoteController::class, 'insertResult']);
Route::get('/getwinner/{id}', [VoteController::class, 'getWinner']);

Route::get('/api/{msg}', [VoteController::class, 'api']);

Route::post('/test', [FaceController::class, 'try']);


Route::get('/test2', [ConstituencyController::class, 'testing2']);

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/admin', [AdminController::class, 'index']);

Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin/logout', [AdminController::class, 'logout']);

Route::middleware(['Logged_in'])->group(function(){

    //Constituency
    Route::get('/Constituency', [ConstituencyController::class, 'index']);
    Route::get('/Constituency/add', [ConstituencyController::class, 'create']);
    Route::get('/Constituency/edit/{id}', [ConstituencyController::class, 'edit']);
    Route::put('/Constituency/update/{id}', [ConstituencyController::class, 'update']);
    Route::post('/Constituency/insert', [ConstituencyController::class, 'insert']);
    Route::delete('/Constituency/delete/{id}', [ConstituencyController::class, 'delete']);

    //Election
    Route::get('/election', [ElectionController::class, 'index']);
    Route::get('election/add', [ElectionController::class, 'create']);
    Route::post('election/insert', [ElectionController::class, 'insert']);
    Route::get('/election/edit/{id}', [ElectionController::class, 'edit']);
    Route::put('/election/update/{id}', [ElectionController::class, 'update']);
    Route::delete('/election/delete/{id}', [ElectionController::class, 'delete']);

    //Political parties
    Route::get('/party', [PoliticalPartiesController::class, 'index']);
    Route::get('/party/add', [PoliticalPartiesController::class, 'create']);
    Route::get('/party/edit/{id}', [PoliticalPartiesController::class, 'edit']);
    Route::put('/party/update/{id}', [PoliticalPartiesController::class, 'update']);
    Route::post('/party/insert', [PoliticalPartiesController::class, 'insert']);
    Route::delete('/party/delete/{id}', [PoliticalPartiesController::class, 'delete']);

    //Ballots
    Route::get('/ballots', [BallotsController::class, 'index']);
    Route::get('/ballots/add', [BallotsController::class, 'create']);
    Route::get('/ballots/edit/{id}', [BallotsController::class, 'edit']);
    Route::put('/ballots/update/{id}', [BallotsController::class, 'update']);
    Route::post('/ballots/insert', [BallotsController::class, 'insert']);
    Route::delete('/ballots/delete/{id}', [BallotsController::class, 'delete']);

    //Ballots candidate
    Route::get('/ballotsCandidate', [BallotsCandidateController::class, 'index']);
    Route::get('/ballotsCandidate/add', [BallotsCandidateController::class, 'create']);
    Route::get('/ballotsCandidate/edit/{id}', [BallotsCandidateController::class, 'edit']);
    Route::put('/ballotsCandidate/update/{id}', [BallotsCandidateController::class, 'update']);
    Route::post('/ballotsCandidate/insert', [BallotsCandidateController::class, 'insert']);
    Route::delete('/ballotsCandidate/delete/{id}', [BallotsCandidateController::class, 'delete']);


    //Candidates
    Route::get('/candidates', [CandidatesController::class, 'index']);
    Route::get('/candidates/add', [CandidatesController::class, 'create']);
    Route::get('/candidates/edit/{id}', [CandidatesController::class, 'edit']);
    Route::put('/candidates/update/{id}', [CandidatesController::class, 'update']);
    Route::post('/candidates/insert', [CandidatesController::class, 'insert']);
    Route::delete('/candidates/delete/{id}', [CandidatesController::class, 'delete']);

});
