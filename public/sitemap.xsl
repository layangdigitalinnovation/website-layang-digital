<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0" 
                xmlns:html="http://www.w3.org/TR/REC-html40"
                xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output method="html" version="1.0" encoding="UTF-8" indent="yes"/>
    <xsl:template match="/">
        <html xmlns="http://www.w3.org/1999/xhtml">
            <head>
                <title>XML Sitemap - Layang Digital</title>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <link rel="icon" type="image/png" href="/images/Logo-icon-layang-digital80x80.png" />
                <style type="text/css">
                    body {
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        color: #334155;
                        background-color: #f8fafc;
                        margin: 0;
                        padding: 40px;
                    }
                    #header {
                        margin-bottom: 30px;
                        background: #0f172a;
                        color: white;
                        padding: 30px;
                        border-radius: 12px;
                        box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1);
                    }
                    h1 {
                        margin: 0 0 10px 0;
                        font-size: 28px;
                    }
                    p {
                        margin: 0;
                        color: #94a3b8;
                    }
                    table {
                        width: 100%;
                        border-collapse: collapse;
                        background: white;
                        border-radius: 12px;
                        overflow: hidden;
                        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
                    }
                    th {
                        text-align: left;
                        padding: 16px;
                        background-color: #f1f5f9;
                        color: #475569;
                        font-weight: 600;
                        border-bottom: 2px solid #e2e8f0;
                    }
                    td {
                        padding: 16px;
                        border-bottom: 1px solid #e2e8f0;
                    }
                    tr:last-child td {
                        border-bottom: none;
                    }
                    tr:hover td {
                        background-color: #f8fafc;
                    }
                    a {
                        color: #2563eb;
                        text-decoration: none;
                        font-weight: 500;
                    }
                    a:hover {
                        text-decoration: underline;
                    }
                    .badge {
                        display: inline-block;
                        padding: 4px 8px;
                        border-radius: 9999px;
                        background: #e0f2fe;
                        color: #0369a1;
                        font-size: 12px;
                        font-weight: 600;
                    }
                </style>
            </head>
            <body>
                <div id="header">
                    <h1>XML Sitemap Layang Digital</h1>
                    <p>Sitemap ini dibuat untuk diindeks secara otomatis oleh Google Search Console dan mesin pencari lainnya.</p>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>URL Halaman</th>
                            <th>Prioritas</th>
                            <th>Perubahan (Freq)</th>
                            <th>Terakhir Diubah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <xsl:for-each select="sitemap:urlset/sitemap:url">
                            <tr>
                                <td>
                                    <xsl:variable name="itemURL">
                                        <xsl:value-of select="sitemap:loc"/>
                                    </xsl:variable>
                                    <a href="{$itemURL}">
                                        <xsl:value-of select="sitemap:loc"/>
                                    </a>
                                </td>
                                <td>
                                    <span class="badge"><xsl:value-of select="sitemap:priority"/></span>
                                </td>
                                <td style="text-transform: capitalize;">
                                    <xsl:value-of select="sitemap:changefreq"/>
                                </td>
                                <td>
                                    <xsl:value-of select="concat(substring(sitemap:lastmod,0,11),concat(' ', substring(sitemap:lastmod,12,5)),concat(' ', substring(sitemap:lastmod,20,6)))"/>
                                </td>
                            </tr>
                        </xsl:for-each>
                    </tbody>
                </table>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>
