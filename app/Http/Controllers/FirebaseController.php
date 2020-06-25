<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    protected $userRepository;
    protected $database;
    protected $firebase;

    public function __construct()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/quiz.json'); // đường dẫn của file json ta vừa tải phía trên
        $this->firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://chemistryonline-71e1a.firebaseio.com')//bạn có thẻ lấy project id ở mục project setting > general
            ->create();
        $this->database = $this->firebase->getDatabase();

        $this->userRepository = $this->database->getReference('user'); //lấy model user.
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $db = $this->database->getReference('QuestionChung')
            // order the reference's children by their key in ascending order
            ->orderByKey()
            ->getSnapshot();
        //
        $check = true;
        do {
            $question = collect($db->getValue())->shuffle()[0];
            if ($question['mon'] == "Hóa Học")
                $check = false;
        } while ($check);

        $arr[] = $question['answerA'];
        $arr[] = $question['answerB'];
        $arr[] = $question['answerC'];
        $arr[] = $question['answerD'];
        $arr = collect($arr)->shuffle();
        return view('layouts.index', compact('question', 'arr'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
