<?php

use Gzero\Core\EntitySerializer;
use Gzero\Repository\UserRepository;

class AccountApiController extends \BaseController {

    protected $userRepo;
    protected $enSerializer;

    public function __construct(UserRepository $userRepo, EntitySerializer $entitySerializer)
    {
        $this->userRepo     = $userRepo;
        $this->enSerializer = $entitySerializer;
        parent::__construct(); // TODO: Change the autogenerated stub
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        return Response::json($this->enSerializer->toArray(Auth::user()));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function update($id)
    {
        $input = Input::all();
        $user  = Auth::user();
        $this->userRepo->update($user, $input);
        $this->userRepo->commit();
        return Response::json(['success' => TRUE]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}
