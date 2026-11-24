/// <reference types="vite/client" />

interface ImportMetaEnv {
  readonly VITE_CONTACT_ENDPOINT?: string
  readonly VITE_LEGACY_BASE_URL?: string
}

interface ImportMeta {
  readonly env: ImportMetaEnv
}
