<?php
namespace App\Http\Controllers;

use App\Repositories\EventTypeRepository;
use Illuminate\Http\Request;

class EventTypeController extends Controller
{

    protected $eventType;

    public function __construct(EventTypeRepository $eventType)
    {
        $this->eventType = $eventType;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'color' => 'required',
            'isTest' => 'required|boolean',
        ]);

        return $this->eventType->create($request->all());
    }

    public function show($id)
    {
        return $this->eventType->get($id);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'type' => 'required',
            'color' => 'required',
            'isTest' => 'required|boolean',
        ]);

        $this->eventType->update($request->all(), $id);
        return $this->eventType->get($id);
    }

    public function delete($id)
    {
        $this->eventType->delete($id);
        return response(null, 204);
    }

    public function index(Request $request)
    {
        return $this->eventType->all($request->query());
    }

}
