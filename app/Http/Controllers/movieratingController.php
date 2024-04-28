<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemovieratingRequest;
use App\Http\Requests\UpdatemovieratingRequest;
use App\Repositories\movieratingRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class movieratingController extends AppBaseController
{
    /** @var movieratingRepository $movieratingRepository*/
    private $movieratingRepository;

    public function __construct(movieratingRepository $movieratingRepo)
    {
        $this->movieratingRepository = $movieratingRepo;
    }

    /**
     * Display a listing of the movierating.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $movieratings = $this->movieratingRepository->all();

        return view('movieratings.index')
            ->with('movieratings', $movieratings);
    }
	
	public function ratemovie($movieid)
	{
    return view('movieratings.ratemovie')->with('movieid',$movieid);
	}
	
	

    /**
     * Show the form for creating a new movierating.
     *
     * @return Response
     */
    public function create()
    {
        return view('movieratings.create');
    }

    /**
     * Store a newly created movierating in storage.
     *
     * @param CreatemovieratingRequest $request
     *
     * @return Response
     */
    public function store(CreatemovieratingRequest $request)
    {
        $input = $request->all();

        $movierating = $this->movieratingRepository->create($input);

        Flash::success('Movierating saved successfully.');

        return redirect(route('movieratings.index'));
    }

    /**
     * Display the specified movierating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $movierating = $this->movieratingRepository->find($id);

        if (empty($movierating)) {
            Flash::error('Movierating not found');

            return redirect(route('movieratings.index'));
        }

        return view('movieratings.show')->with('movierating', $movierating);
    }

    /**
     * Show the form for editing the specified movierating.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $movierating = $this->movieratingRepository->find($id);

        if (empty($movierating)) {
            Flash::error('Movierating not found');

            return redirect(route('movieratings.index'));
        }

        return view('movieratings.edit')->with('movierating', $movierating);
    }

    /**
     * Update the specified movierating in storage.
     *
     * @param int $id
     * @param UpdatemovieratingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemovieratingRequest $request)
    {
        $movierating = $this->movieratingRepository->find($id);

        if (empty($movierating)) {
            Flash::error('Movierating not found');

            return redirect(route('movieratings.index'));
        }

        $movierating = $this->movieratingRepository->update($request->all(), $id);

        Flash::success('Movierating updated successfully.');

        return redirect(route('movieratings.index'));
    }

    /**
     * Remove the specified movierating from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $movierating = $this->movieratingRepository->find($id);

        if (empty($movierating)) {
            Flash::error('Movierating not found');

            return redirect(route('movieratings.index'));
        }

        $this->movieratingRepository->delete($id);

        Flash::success('Movierating deleted successfully.');

        return redirect(route('movieratings.index'));
    }
}
