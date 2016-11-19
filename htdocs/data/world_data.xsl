<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output omit-xml-declaration="yes" indent="yes" />

<xsl:template match="/*">
    <table id="dataTable">
        <xsl:apply-templates select="Country" />
    </table>
</xsl:template>

<xsl:template match="Country[1]">
    <thead>
    <tr>
        <xsl:apply-templates select="*[position() &lt; 8]" mode="header" />
    </tr>
    </thead>
    <xsl:call-template name="row" />
</xsl:template>

<xsl:template match="Country" name="row">
    <tr>
        <xsl:apply-templates select="*[position() &lt; 8]" />
    </tr>
</xsl:template>

<xsl:template match="Country/*">
    <td>
        <xsl:apply-templates select="node()" />
    </td>
</xsl:template>

<xsl:template match="Country/*" mode="header">
    <th>
        <xsl:value-of select="name()" />
    </th>
</xsl:template>

</xsl:stylesheet>