<?php
use App\Transaction;
use Session;
use Mail;

namespace App\Repositories\Transaction;
use App\Repositories\Transaction\TransactionContract;


class EloquentTransactionRepository implements TransactionContract{

     public function create($request) {
    //     $url = null;
    //     $contractor = new Contractor;
    //     if(array_key_exists('profile_pic', $request)){
    //         $file = $request->profile_pic;
    //         $filenamewithoutext = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
    //         $extension = $file->getClientOriginalExtension();
    //         $filename = $filenamewithoutext.'_'.time().'.'.$extension;
    //         $directory = 'uploads/'.$filename;
    //         $uploaded = Storage::disk('s3')->put( $directory,  file_get_contents($file) , 'public');
    //         if($uploaded) {
    //             $url = Storage::disk('s3')->url($filename);
    //             $Transaction = Transaction::where('id', Auth::Transaction()->id)->first();
    //             $Transaction->profile_pic = $url;
    //             $Transaction->save();
    //         }
    $requestData['password'] = bcrypt($requestData['password']);
    $mda =  Mda::create($requestData);

    $data = array(
        'Transactionname' => $requestData['name'],
        'email' => $requestData['email'],
        'password' => $pass,
        'phone' => $requestData['phone']
    );

    Mail::send('emails.emailTemplate', $data, function($message) use ($data) {
        $message->from('admin@thrift.com', "e-Thrift");
        $message->to($data['email']);
        $message->subject("e-Thrift Account details");
      });

         }


    //     $search = Contractor::where('Transaction_id', Auth::Transaction()->id)->get()->first();
    //     if($search) {
    //         $this->setContractorProperties($search, $request);
    //         return $search->save();
    //     }
    //     else {
    //         $this->setContractorProperties($contractor, $request);
    //         $contractor->save();
    //     }
    // }

    // public function getCompanyById(){
    //     return Contractor::where('Transaction_id', Auth::Transaction()->id)->first();
    // }

    // public function find($id){
    //    return Contractor::where('Transaction_id', $id)
    //    ->with('Transaction')
    //    ->first();
    // }

    // public function getContractorProfile() {
    //     $contractor  = Contractor::where('Transaction_id', Auth::Transaction()->id)
    //     ->with('Transaction')
    //     ->first();
    //     if($contractor) return $contractor;
    //      $notification = array(
    //         'message' => 'Password Update Successful!',
    //         'alert-type' => 'success'
    //         );
    //     return redirect()->back()->with($notification);
    // }

    // public function updateAccountStatus($id, $value){
    //     $contractor = Contractor::where('Transaction_id', $id)->first();
    //     $note;
    //     if($value == 1) {
    //         $note = 'Please be informed that your account has been Activated,
    //         Congratulations!';
    //     }
    //     else {
    //         $note = 'Please be informed that your account has been DISABLED,
    //         Contact Admin for further clarification';
    //     }

    //     $data = array(
    //         'Transactionname' => $contractor['company_name'],
    //         'email' => $contractor['email'],
    //         'note' => $note,
    //     );


    //     if($contractor) {
    //         $contractor->isActive = $value;
    //         $contractor->save();
    //         Mail::send('emails.emailNotification', $data, function($message) use ($data) {
    //             $message->from('plateaustatebpp@gmail.com', "Plateau State BPP");
    //             $message->to($data['email']);
    //             $message->subject("PLBPP Account details");
    //         });
    //         return 1;
    //     }
    //     else {
    //         return 0;
    //     }

    // }

    // public function allContractors() {
    //     return Contractor::all()->sortBy('company_name');
    // }



    // public function getTransactionById() {
    //     return Transaction::where('id', Auth::Transaction()->id)->first();
    // }

    // public function editPassword($request) {
    //     $Transaction = Transaction::where('id', Auth::Transaction()->id)->first();
    //     if(!Hash::check($request->password, $Transaction->password )) {
    //         return 'Current Password donot Match!';
    //     }
    //     else if($request->new_password != $request->confirm_password){
    //         return 'New Passwords donot Match';
    //     }
    //     $Transaction->password = bcrypt($request->new_password);
    //     $Transaction->save();
    //     return 1;
    // }

    // private function setContractorProperties($contractor, $request) {
    //     $Transaction = Auth::Transaction();
    //     $contractor->company_name = $Transaction->name;
    //     $contractor->cac_number = $Transaction->cac;
    //     $contractor->address = $request->address;
    //     $contractor->city =  $request->city;
    //     $contractor->country = $request->country;
    //     $contractor->email = $Transaction->email;
    //     $contractor->Transaction_id = $Transaction->id;
    //     $contractor->website = $request->website;
    //     $contractor->isActive = false;
    // }
}


?>




