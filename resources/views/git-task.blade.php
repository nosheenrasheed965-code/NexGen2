<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel & Git Learning Task</title>
<style>
:root{--ink:#172033;--muted:#637083;--line:#e4e9f0;--accent:#3157a4;--soft:#f5f7fb}
*{box-sizing:border-box}body{margin:0;font-family:Arial,sans-serif;background:#f4f6fa;color:var(--ink);line-height:1.6}
.wrap{width:min(1040px,92%);margin:36px auto}.hero{padding:32px;border-radius:20px;color:#fff;background:linear-gradient(135deg,#172b58,#3157a4)}
.eyebrow{text-transform:uppercase;letter-spacing:.12em;font-size:.8rem;opacity:.8}h1{line-height:1.2;margin:8px 0} .hero p{color:#e5ecff}
.grid{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:18px;margin-top:20px}
.card{background:#fff;border:1px solid var(--line);border-radius:16px;padding:22px;box-shadow:0 5px 18px #1423410a}
h2{font-size:1.2rem;margin:0 0 14px}.folder{padding:13px 0;border-bottom:1px solid var(--line)}.folder:last-child{border:0}
.name{color:var(--accent);font-weight:700}.purpose{color:var(--muted);font-size:.94rem;margin-top:3px}
.git-item{background:var(--soft);padding:14px;border-radius:12px;margin-top:12px}.git-item h3{margin:0 0 6px}
code{display:block;overflow-wrap:anywhere;background:#182238;color:#f4f7ff;padding:10px 12px;border-radius:8px;font-size:.88rem}
.note{border-left:4px solid var(--accent);background:#eaf0ff;padding:13px 15px;border-radius:8px;margin-top:16px}
footer{text-align:center;color:var(--muted);font-size:.9rem;padding:24px 0}
@media(max-width:720px){.grid{grid-template-columns:1fr}.hero{padding:24px}.wrap{margin-top:18px}}
</style>
</head>
<body>
<main class="wrap">
<header class="hero"><div class="eyebrow">Learning task</div><h1>Laravel Project Structure & Git Workflow</h1>
<p>A simple reference page to review common Laravel folders and understand Commit, Push, and Pull.</p></header>
<section class="grid">
<article class="card"><h2>Laravel folders</h2>
@foreach ($folders as $folder)
<div class="folder"><div class="name">{{ $folder['name'] }}</div><div class="purpose">{{ $folder['purpose'] }}</div></div>
@endforeach
</article>
<article class="card"><h2>Git: the three main actions</h2>
@foreach ($gitCommands as $item)
<div class="git-item"><h3>{{ $item['name'] }}</h3><code>{{ $item['command'] }}</code><p class="purpose">{{ $item['purpose'] }}</p></div>
@endforeach
<div class="note"><strong>Safety reminder:</strong> Check <code>git status</code> before staging. Never commit a real `.env` file containing passwords, API keys, or secret values.</div>
</article>
</section>
<section class="card" style="margin-top:18px"><h2>Meeting summary</h2>
<p><strong>Commit:</strong> records staged changes in local Git history.</p>
<p><strong>Push:</strong> sends local commits to the remote repository.</p>
<p><strong>Pull:</strong> fetches remote changes and integrates them into the current local branch.</p>
<p><strong>Typical Laravel flow:</strong> Request → Route → Controller → Model/database if needed → View/response.</p>
</section>
<footer>Laravel & Git Learning Task • No database is required for this demo page.</footer>
</main>
</body>
</html>
