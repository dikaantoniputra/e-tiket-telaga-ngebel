<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>HTML to PDF Demo</title>
    <meta name="description" content="HTML to PDF Demo" />
    <meta name="author" content="Tyler Hawkins" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body,
      html {
        margin: 0;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      }

      html {
        padding: 0;
        font-size: 16px;
      }

      body {
        padding: 2rem;
        font-size: 100%;
      }

      h1 {
        margin-top: 0;
      }

      .buttonContainer {
        margin: 2rem 0;
      }

      .btn {
        padding: 0.5rem 0.75rem;
        font-size: 1rem;
        font-family: inherit;
        font-weight: normal;
        border: none;
        border-radius: 0.5rem;
        background: #0f4871;
        color: #fff;
        cursor: pointer;
        position: relative;
        max-width: 18rem;
        word-break: break-word;
        word-wrap: break-word;
        transition: all 0.5s;
        margin-right: 1rem;
      }

      .btn:focus,
      .btn:hover {
        outline: none;
      }

      .btn:focus::before,
      .btn:hover::before {
        box-shadow: #0f4871 0 0 0 0.0625rem;
        content: '';
        height: calc(100% + 0.25rem);
        left: 0;
        margin-left: -0.25rem;
        margin-top: -0.25rem;
        pointer-events: none;
        position: absolute;
        top: 0;
        width: calc(100% + 0.25rem);
        border-radius: inherit;
        padding: 0.125rem;
      }

      #styledHeaderLink {
        margin-top: 2rem;
      }

      #styledTable {
        border-collapse: collapse;
        width: auto;
      }

      #styledTable caption {
        text-align: left;
        margin: 2rem 0 1rem 0;
        font-weight: bold;
      }

      #styledTable td,
      #styledTable th {
        border: 0.0625rem solid #ddd;
        padding: 0.75rem;
      }

      #styledTable tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #styledTable tr:hover {
        background-color: #ddd;
      }

      #styledTable th {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        text-align: left;
        background-color: #0f4871;
        color: white;
      }

      #styledTable tfoot {
        text-align: right;
      }

      @media print {
        header,
        .buttonContainer {
          display: none;
        }
      }

      @page {
        margin-top: 80px;
        margin-bottom: 80px;
        @top {
          content: "MLB World Series Winners"
        }
        @bottom {
          /* footer with counter functions to insert page counters */
          content: "Page " counter(page) " of " counter(pages)
        }
      }
    </style>
  </head>
  <body>
    <main>
      <header>
        <h1>Export Laporan Atlantis</h1>
        <p>Ojok korupsi</p>
      </header>
      
      <table id="styledTable">
        <caption>Uts*</caption>
        <thead>
          <tr class="colhead">
            <th>No</th>
            <th>Nama Wisatawan</th>
                <th>Harga</th>
                <th>Tanggal Pesan</th>
                <th>Tanggal Bayar</th>
                <th>Status</th>
            
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr class="oddrow">
            <td>{{ $loop->iteration }}</td> <!-- Auto-incremented loop counter -->
            <td>{{ $item->user->profile->name }}</td>
            <td>{{ $item->jumlah }}</td>
            <td>{{ $item->boking->tgl_boking }}</td>
            <td>{{ $item->updated_at }}</td>
            <td>{{ $item->status }}</td>
          </tr>
          @endforeach
          
        </tbody>
        <tfoot>
          <tr>
           
          </tr>
        </tfoot>
      </table>
    </main>

    <!-- For DocRaptor -->
   
  </body>
</html>