<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreditCardController extends Controller
{
    /**
     * Show only the last 4 digits, hide the remaining for a credit card
     *
     * @param Request $request
     * @return void
     */
    public function mask(Request $request)
    {
        $validated = $request->validate([
            'card_number' => 'required|string|min:16|numeric',
        ]);

        $cardNumber = $validated['card_number'];
        $maskedCard = str_repeat('*', 12) . substr($cardNumber, -4);
        
        return response()->json(['masked_card' => $maskedCard]);
    }
}
