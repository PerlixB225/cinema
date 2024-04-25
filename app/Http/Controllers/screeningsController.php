<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatescreeningsRequest;
use App\Http\Requests\UpdatescreeningsRequest;
use App\Repositories\screeningsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class screeningsController extends AppBaseController
{
    /** @var screeningsRepository $screeningsRepository*/
    private $screeningsRepository;

    public function __construct(screeningsRepository $screeningsRepo)
    {
        $this->screeningsRepository = $screeningsRepo;
    }

    /**
     * Display a listing of the screenings.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $screenings = $this->screeningsRepository->all();

        return view('screenings.index')
            ->with('screenings', $screenings);
    }

    /**
     * Show the form for creating a new screenings.
     *
     * @return Response
     */
    public function create()
    {
        return view('screenings.create');
    }

    /**
     * Store a newly created screenings in storage.
     *
     * @param CreatescreeningsRequest $request
     *
     * @return Response
     */
    public function store(CreatescreeningsRequest $request)
    {
        $input = $request->all();

        $screenings = $this->screeningsRepository->create($input);

        Flash::success('Screenings saved successfully.');

        return redirect(route('screenings.index'));
    }

    /**
     * Display the specified screenings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $screenings = $this->screeningsRepository->find($id);

        if (empty($screenings)) {
            Flash::error('Screenings not found');

            return redirect(route('screenings.index'));
        }

        return view('screenings.show')->with('screenings', $screenings);
    }

    /**
     * Show the form for editing the specified screenings.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $screenings = $this->screeningsRepository->find($id);

        if (empty($screenings)) {
            Flash::error('Screenings not found');

            return redirect(route('screenings.index'));
        }

        return view('screenings.edit')->with('screenings', $screenings);
    }

    /**
     * Update the specified screenings in storage.
     *
     * @param int $id
     * @param UpdatescreeningsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatescreeningsRequest $request)
    {
        $screenings = $this->screeningsRepository->find($id);

        if (empty($screenings)) {
            Flash::error('Screenings not found');

            return redirect(route('screenings.index'));
        }

        $screenings = $this->screeningsRepository->update($request->all(), $id);

        Flash::success('Screenings updated successfully.');

        return redirect(route('screenings.index'));
    }

    /**
     * Remove the specified screenings from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $screenings = $this->screeningsRepository->find($id);

        if (empty($screenings)) {
            Flash::error('Screenings not found');

            return redirect(route('screenings.index'));
        }

        $this->screeningsRepository->delete($id);

        Flash::success('Screenings deleted successfully.');

        return redirect(route('screenings.index'));
    }
}
