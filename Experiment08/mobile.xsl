<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">

    <xsl:template match="/">
        <html>
            <head>
                <title>Mobile Catalog</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        margin: 20px;
                    }

                    h2 {
                        text-align: center;
                        color: darkblue;
                    }

                    table {
                        border-collapse: collapse;
                        width: 70%;
                        margin: auto;
                        background-color: white;
                    }

                    th, td {
                        border: 1px solid black;
                        padding: 10px;
                        text-align: center;
                    }

                    th {
                        background-color: lightblue;
                    }

                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }
                </style>
            </head>

            <body>
                <h2>Mobile Catalog</h2>

                <table>
                    <tr>
                        <th>Brand</th>
                        <th>Model</th>
                        <th>Price</th>
                        <th>Storage</th>
                    </tr>

                    <xsl:for-each select="mobiles/mobile">
                        <tr>
                            <td><xsl:value-of select="brand"/></td>
                            <td><xsl:value-of select="model"/></td>
                            <td><xsl:value-of select="price"/></td>
                            <td><xsl:value-of select="storage"/></td>
                        </tr>
                    </xsl:for-each>

                </table>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>