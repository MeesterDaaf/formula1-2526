<?php

require __DIR__ . '/database.php'; //www/database.php

$result = mysqli_query($conn, "SELECT * FROM circuits");

$circuits = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore the Formula 1 circuit collection.">
    <title>F1 Pulse | Circuits</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
      <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700;800;900&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #f5f5f2;
            --muted: #9b9d9b;
            --surface: #151716;
            --surface-raised: #1d201e;
            --line: rgba(255, 255, 255, 0.12);
            --red: #e10600;
            --yellow: #f4d35e;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            color: var(--ink);
            background: #0b0d0c;
            font-family: 'Manrope', sans-serif;
            background-image: linear-gradient(rgba(255,255,255,.025) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,.025) 1px, transparent 1px);
            background-size: 42px 42px;
        }

        .page-nav {
            position: relative !important;
            background: rgba(11, 13, 12, .92) !important;
            border-bottom: 1px solid var(--line);
            backdrop-filter: blur(14px);
        }

        .page-nav a { color: var(--muted); text-decoration: none; }
        .page-nav a:hover, .page-nav a[aria-current="page"] { color: var(--ink); }

        .circuit-page { max-width: 1180px; margin: 0 auto; padding: 74px 28px 100px; }

        .eyebrow {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 22px;
            color: var(--yellow);
            font-size: .72rem;
            font-weight: 700;
            letter-spacing: .18em;
            text-transform: uppercase;
        }

        .eyebrow::before { content: ''; width: 34px; height: 2px; background: var(--red); }

        .page-header {
            display: grid;
            grid-template-columns: minmax(0, 1fr) auto;
            align-items: end;
            gap: 32px;
            margin-bottom: 48px;
        }

        h1, h2, p { margin-top: 0; }

        h1 {
            max-width: 700px;
            margin-bottom: 16px;
            font-family: 'Barlow Condensed', sans-serif;
            font-size: clamp(3.6rem, 8vw, 7.2rem);
            font-weight: 900;
            letter-spacing: -.045em;
            line-height: .82;
            text-transform: uppercase;
        }

        .intro { max-width: 540px; margin-bottom: 0; color: var(--muted); line-height: 1.7; }

        .circuit-count {
            padding: 16px 20px;
            border-left: 2px solid var(--red);
            color: var(--muted);
            font-size: .75rem;
            letter-spacing: .12em;
            text-transform: uppercase;
        }

        .circuit-count strong { display: block; color: var(--ink); font-family: 'Barlow Condensed', sans-serif; font-size: 2.5rem; line-height: .9; }

        .circuit-grid { display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); gap: 16px; }

        .circuit-card {
            position: relative;
            min-height: 210px;
            padding: 24px;
            overflow: hidden;
            border: 1px solid var(--line);
            background: linear-gradient(145deg, rgba(39, 42, 40, .96), rgba(20, 22, 21, .98));
            animation: card-in .65s both;
            transition: border-color .25s ease, transform .25s ease, background .25s ease;
        }

        .circuit-card::after {
            position: absolute;
            right: -18px;
            bottom: -44px;
            width: 140px;
            height: 140px;
            border: 1px solid rgba(244, 211, 94, .3);
            border-radius: 50%;
            content: '';
        }

        .circuit-card:hover { border-color: rgba(244, 211, 94, .65); background: var(--surface-raised); transform: translateY(-6px); }
        .circuit-card:nth-child(2) { animation-delay: .06s; }
        .circuit-card:nth-child(3) { animation-delay: .12s; }
        .circuit-card:nth-child(4) { animation-delay: .18s; }
        .circuit-card:nth-child(5) { animation-delay: .24s; }
        .circuit-card:nth-child(6) { animation-delay: .3s; }

        .card-number { color: var(--red); font-family: 'Barlow Condensed', sans-serif; font-size: 1.2rem; font-weight: 800; }
        .circuit-card h2 { position: relative; z-index: 1; margin: 38px 0 9px; font-family: 'Barlow Condensed', sans-serif; font-size: 2rem; line-height: .95; text-transform: uppercase; }
        .location { position: relative; z-index: 1; display: flex; align-items: center; gap: 8px; margin-bottom: 0; color: var(--muted); font-size: .82rem; }
        .location::before { content: ''; width: 7px; height: 7px; border-radius: 50%; background: var(--yellow); box-shadow: 0 0 0 4px rgba(244,211,94,.12); }

        .empty-state { padding: 48px; border: 1px dashed var(--line); color: var(--muted); text-align: center; }

        @keyframes card-in { from { opacity: 0; transform: translateY(14px); } to { opacity: 1; transform: translateY(0); } }

        @media (max-width: 800px) {
            .page-header { grid-template-columns: 1fr; gap: 24px; }
            .circuit-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 520px) {
            .circuit-page { padding: 52px 18px 70px; }
            h1 { font-size: 4.25rem; }
            .circuit-grid { grid-template-columns: 1fr; }
        }

        @media (prefers-reduced-motion: reduce) {
            .circuit-card { animation: none; transition: none; }
        }
    </style>
</head>
<body>
    <div class="page-nav">
        <?php include 'nav.php'; ?>
    </div>

    <main class="circuit-page">
        <header class="page-header">
            <div>
                <div class="eyebrow">2026 season archive</div>
                <h1>Race the world.</h1>
                <p class="intro">Every circuit has its own rhythm. Discover the places where Formula 1 turns speed, strategy and precision into history.</p>
            </div>
            <div class="circuit-count"><strong><?php echo count($circuits); ?></strong> circuits listed</div>
        </header>

        <?php if (count($circuits) > 0): ?>
            <section class="circuit-grid" aria-label="Formula 1 circuits">
                <?php foreach ($circuits as $index => $circuit): ?>
                    <article class="circuit-card">
                        <div class="card-number"><?php echo str_pad($index + 1, 2, '0', STR_PAD_LEFT); ?></div>
                        <h2><?php echo htmlspecialchars($circuit['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
                        <p class="location"><?php echo htmlspecialchars($circuit['location'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </article>
                <?php endforeach; ?>
            </section>
        <?php else: ?>
            <p class="empty-state">No circuits found yet.</p>
        <?php endif; ?>
    </main>
</body>
</html>


