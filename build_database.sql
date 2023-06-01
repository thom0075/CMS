DROP TABLE IF EXISTS blocktypes;
CREATE TABLE blocktypes(
    blockTypeID INTEGER PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50)
);

DROP TABLE IF EXISTS cmsBlock;
CREATE TABLE cmsBlock(
    cmsBlockID INTEGER PRIMARY KEY AUTO_INCREMENT,
    blockTypeID INTEGER,
    title VARCHAR(50),
    content TEXT,
    pageID INTEGER
);

DROP TABLE IF EXISTS cmsPages;
CREATE TABLE cmsPages(
    cmsPageID INTEGER PRIMARY KEY AUTO_INCREMENT,
    pageName VARCHAR(50)
);

DROP VIEW IF EXISTS pageView;
CREATE VIEW pageView AS
    SELECT
        blocktypes.name as 'block',
        cmsBlock.title as 'title',
        cmsBlock.content as 'content',
        cmsBlock.pageID as 'pageID',
        cmsPages.pageName as 'page'
    FROM
    cmsBlock, cmsPages, blocktypes
    WHERE
    cmsBlock.cmsBlockID = blocktypes.blockTypeID;
