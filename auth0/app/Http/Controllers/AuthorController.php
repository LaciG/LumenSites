<?php
    namespace App\Http\Controllers;

    use App\Author;
    use Illuminate\Http\Request;

    class AuthorController extends Controller {

        public function showAllAuthors() {
            return response()->json(Author::all());
        }

        public function showOneAuthor($id) {
            return response()->json(Author::find($id));
        }

        public function create(Request $request) {
            /**
             * Validálás beérkező adatokra
             * required => szükséges
             * email => E-mail formátum legyen
             * unique:users => nem lehet többször használni user
             * alpha => milyen karaktereket enged be: Csak szöveget
             */
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
                'location' => 'required|alpha'
            ]);

            $author = Author::create($request->all());

            return response()->json($author, 201);
        }

        public function update($id, Request $request) {
            $author = Author::findOrFail($id);
            $author->update($request->all());

            return response()->json($author, 200);
        }

        public function delete($id) {
            Author::findOrFail($id)->delete();

            return response('Deleted succesfully', 200);
        }
    }
?>