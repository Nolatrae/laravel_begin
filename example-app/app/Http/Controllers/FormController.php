use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            // Добавьте правила валидации для других полей
        ]);

        $uniqueName = uniqid() . '.json';
        file_put_contents(storage_path('app/' . $uniqueName), json_encode($data));

        return redirect('/form')->with('success', 'Данные успешно сохранены.');
    }

    public function showData()
    {
        $files = glob(storage_path('app/*.json'));
        $data = [];
        foreach ($files as $file) {
            $data[] = json_decode(file_get_contents($file), true);
        }

        return view('data', compact('data'));
    }
}
