public function __construct() {
    $this->middleware('auth');
}

public function create() {
    if (auth()->user()->role->name !== 'author') {
        return redirect()->route('posts.index')->with('error', 'Unauthorized');
    }
    // Show create form for authors
}
public function search(Request $request) {
    $query = $request->input('query');
    $posts = Post::where('title', 'like', '%' . $query . '%')
                  ->orWhere('content', 'like', '%' . $query . '%')
                  ->get();

    return view('posts.search_results', compact('posts'));
}
public function storeComment(Request $request, Post $post) {
    $comment = new Comment();
    $comment->content = $request->input('content');
    $comment->post_id = $post->id;
    $comment->user_id = auth()->id();
    $comment->save();

    return back();
}
