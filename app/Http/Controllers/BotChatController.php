<?php

namespace App\Http\Controllers;

use App\Models\BotChat;
use App\Http\Requests\StoreBotChatRequest;
use App\Http\Requests\UpdateBotChatRequest;

class BotChatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreBotChatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBotChatRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BotChat  $botChat
     * @return \Illuminate\Http\Response
     */
    public function show(BotChat $botChat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BotChat  $botChat
     * @return \Illuminate\Http\Response
     */
    public function edit(BotChat $botChat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBotChatRequest  $request
     * @param  \App\Models\BotChat  $botChat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBotChatRequest $request, BotChat $botChat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BotChat  $botChat
     * @return \Illuminate\Http\Response
     */
    public function destroy(BotChat $botChat)
    {
        //
    }
}
