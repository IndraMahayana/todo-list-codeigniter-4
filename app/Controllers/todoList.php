<?php

namespace App\Controllers;

class todoList extends BaseController
{
    public function index()
    {
        $data['data'] = $this->mdl->findAll();
        return view('todoListView', $data);
    }

    // view
    function todoListEdit($id) {
        $data['data']=$this->mdl->find($id);
        return view('todoListEdit', $data);
    }

    // proses
    function create() {
        $this->mdl->insert($this->request->getPost());
        return redirect()->to(base_url('todoList'));
    }

    function edit($id) {
        $this->mdl->update($id, $this->request->getPost());
        return redirect()->to(base_url('todoList'));
    }

    function delete($id) {
        $this->mdl->delete($id);
        return redirect()->to(base_url('todoList'));
    }
}